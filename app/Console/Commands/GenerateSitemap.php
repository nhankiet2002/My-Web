<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;
use App\Models\Project;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Tự động tạo sitemap cho trang web';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // Thêm trang chủ
        $sitemap->add(Url::create(route('home'))
            ->setLastModificationDate(Carbon::now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(1.0));

        // Thêm các trang danh sách
        $sitemap->add(Url::create(route('blog.index'))->setPriority(0.9));
        $sitemap->add(Url::create(route('projects.index'))->setPriority(0.9));

        // Thêm tất cả các bài viết
        Post::whereNotNull('published_at')->get()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(Url::create(route('blog.show', $post->slug))
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8));
        });

        // Thêm tất cả các dự án
        Project::all()->each(function (Project $project) use ($sitemap) {
            $sitemap->add(Url::create(route('projects.show', $project->slug))
                ->setLastModificationDate($project->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.7));
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap đã được tạo thành công!');
    }
}