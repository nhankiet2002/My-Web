const express = require('express');
const mysql = require('mysql2/promise');
const bcrypt = require('bcryptjs');
const session = require('express-session');

const app = express();
const port = 3000;

// Cấu hình để server có thể đọc dữ liệu JSON và form-data từ request
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Cấu hình session
app.use(session({
    secret: 'day-la-mot-chuoi-bi-mat-rat-dai-va-an-toan', // Thay đổi chuỗi này!
    resave: false,
    saveUninitialized: true,
    cookie: { secure: false } // Đặt là `true` nếu bạn dùng HTTPS
}));

// Cung cấp các file tĩnh trong thư mục 'public'
app.use(express.static('public'));

// Cấu hình kết nối MySQL - Thay thế bằng thông tin của bạn!
const dbConfig = {
    host: 'your_database_host', // vd: 'localhost' hoặc IP host
    user: 'reylvnzs_nhankiet',
    password: 'Kiethd2002',
    database: 'reylvnzs_myweb'
};

let db;
mysql.createConnection(dbConfig)
    .then(connection => {
        db = connection;
        console.log('Connected to MySQL database!');
    })
    .catch(err => {
        console.error('Error connecting to MySQL:', err);
        process.exit(1);
    });

// Middleware để kiểm tra xem người dùng đã đăng nhập chưa
function requireLogin(req, res, next) {
    if (req.session && req.session.userId) {
        return next();
    } else {
        res.status(401).json({ message: 'Unauthorized. Please login.' });
    }
}


// ======= API ENDPOINTS =======

// API để đăng nhập
app.post('/api/login', async (req, res) => {
    const { username, password } = req.body;
    try {
        const [rows] = await db.execute('SELECT * FROM users WHERE username = ?', [username]);
        if (rows.length === 0) {
            return res.status(401).json({ message: 'Invalid credentials' });
        }

        const user = rows[0];
        const isPasswordMatch = await bcrypt.compare(password, user.password_hash);

        if (isPasswordMatch) {
            req.session.userId = user.id;
            req.session.username = user.username;
            res.json({ message: 'Login successful!' });
        } else {
            res.status(401).json({ message: 'Invalid credentials' });
        }
    } catch (err) {
        res.status(500).json({ message: 'Server error', error: err.message });
    }
});

// API để đăng xuất
app.post('/api/logout', (req, res) => {
    req.session.destroy(err => {
        if (err) {
            return res.status(500).json({ message: 'Could not log out.' });
        }
        res.clearCookie('connect.sid'); // Tên cookie mặc định của express-session
        res.json({ message: 'Logout successful' });
    });
});

// API để lấy tất cả bài blog (công khai)
app.get('/api/posts', async (req, res) => {
    try {
        const [posts] = await db.execute(
            'SELECT posts.*, users.username AS author FROM posts JOIN users ON posts.author_id = users.id ORDER BY posts.created_at DESC'
        );
        res.json(posts);
    } catch (err) {
        res.status(500).json({ message: 'Server error', error: err.message });
    }
});

// API để tạo bài blog mới (yêu cầu đăng nhập)
app.post('/api/posts', requireLogin, async (req, res) => {
    const { title, content } = req.body;
    const authorId = req.session.userId;

    if (!title || !content) {
        return res.status(400).json({ message: 'Title and content are required.' });
    }

    // Tạo slug từ title
    const slug = title.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');

    try {
        await db.execute(
            'INSERT INTO posts (title, content, slug, author_id) VALUES (?, ?, ?, ?)',
            [title, content, `${slug}-${Date.now()}`, authorId] // Thêm Date.now() để slug luôn unique
        );
        res.status(201).json({ message: 'Post created successfully!' });
    } catch (err) {
        res.status(500).json({ message: 'Server error', error: err.message });
    }
});


// Lắng nghe các kết nối
app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
});

// Chạy file này một lần để tạo user admin
// node -e 'require("./server.js").createAdminUser()'
module.exports.createAdminUser = async function() {
    const username = 'admin'; // Hoặc username bạn muốn
    const password = 'your_strong_password'; // Thay bằng mật khẩu mạnh!
    const hash = await bcrypt.hash(password, 10);
    
    try {
        const conn = await mysql.createConnection(dbConfig);
        await conn.execute('INSERT INTO users (username, password_hash) VALUES (?, ?)', [username, hash]);
        console.log('Admin user created successfully!');
        await conn.end();
    } catch (err) {
        console.error('Error creating admin user:', err.message);
    }
}