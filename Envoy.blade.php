@servers(['laravel5-5' => 'admin@37.187.109.143'])

@task('deploy', ['on' => 'laravel5-5'])
    cd /home/admin/projects/laravel5-5
    git pull origin master
    composer install
@endtask