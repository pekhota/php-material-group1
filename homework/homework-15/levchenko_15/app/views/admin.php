<?php
declare(strict_types=1);
?>
    <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>News</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/pricing">Pricing</a></li>
                                <li class="breadcrumb-item active"><a href="/masonry">Masonry</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
    <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">

                                    <div class="card-tools">
                                            <div>
                                                <a href="/user" action="index" class="btn btn-primary btn-sm">
                                                    <p style="margin: 0; padding: 5px">Create new</p>
                                                </a>
                                            </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 500px;">
                                    <table class="table table-head-fixed text-wrap">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Author</th>
                                            <th>Body</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        /**
                                         * @var News[] $news
                                         */
                                        foreach ($news as $s) {
                                        ?>
                                        <tr>
                                            <td><?= $s->id ?></td>
                                            <td><?= $s->title ?></td>
                                            <td><?= $s->date ?></td>
                                            <td><?= $s->author ?></td>
                                            <td><?= $s->body ?></td>
                                            <td>
                                                <div class="text-nowrap">
                                                    <a href="/admin/<?php echo $s->id ?>" action="post" class="btn btn-primary btn-sm">
                                                       <p style="margin: 0; padding: 5px">Read</p>
                                                    </a>
                                                    <a href="/edit/<?php echo $s->id ?>" action="get" class="btn btn-primary btn-sm">
                                                       <p style="margin: 0; padding: 5px">Edit</p>
                                                    </a>
                                                    <a href="/delete/<?php echo $s->id ?>" action="get" class="btn btn-primary btn-sm">
                                                       <p style="margin: 0; padding: 5px">Delete</p>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                          <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


