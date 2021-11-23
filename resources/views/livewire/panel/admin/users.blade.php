{{-- <div>hi</div> --}}
    <!-- Main content -->
    <x-slot name="header">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">{{ __('User list') }}</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <section class="content">

      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Teat</h4>
              <div class="box-controls pull-right">
                <div class="lookup lookup-circle lookup-right">
                  <input type="text" name="s">
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>E-Mail</th>
                      <th>Action</th>

                    </tr>
                    @foreach ($data as $item )
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>Action</td>

                    </tr>
                    @endforeach



                  </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div><!-- /.row -->

    </section><!-- /.content -->
