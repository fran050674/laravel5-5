@servers(['web' => 'admin@37.187.109.143'])

@task('list', ['on' => 'web'])
    cd /home/admin/projects
    ls -la
@endtask