@extends('dashboard.layouts.main')

@section('content')

      <div class="page-heading">
        <div class="page-title">
          <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-2">
              <h3>Pegawai</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
              <nav
                aria-label="breadcrumb"
                class="breadcrumb-header float-start float-lg-end"
              >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Pegawai
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <section class="section">
          <div class="card">
            <a href="/user-create">
                <h5 class="col-12 col-md-2 btn btn-primary" style="margin: 15px 15px 0px 15px">Create Data</h5>
                </a>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>City</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Graiden</td>
                          <td>vehicula.aliquet@semconsequat.co.uk</td>
                          <td>076 4820 8838</td>
                          <td>Offenburg</td>
                          <td>
                            <span class="badge bg-success">Active</span>
                          </td>
                          <td>
                          <a href="/user-edit">
                              <box-icon name='edit'></box-icon>
                          </a>
                          <a href="">
                              <box-icon  name='message-square-x'></box-icon>
                          </a>
                          </td>
                        </tr>
                        <tr>
                          <td>Dale</td>
                          <td>fringilla.euismod.enim@quam.ca</td>
                          <td>0500 527693</td>
                          <td>New Quay</td>
                          <td>
                            <span class="badge bg-success">Active</span>
                          </td>
                          <td>
                              <a href="/user-edit">
                                  <box-icon name='edit'></box-icon>
                              </a>
                              <a href="">
                                  <box-icon  name='message-square-x'></box-icon>
                              </a>
                          </td>
                        </tr>
                        <tr>
                          <td>Nathaniel</td>
                          <td>mi.Duis@diam.edu</td>
                          <td>(012165) 76278</td>
                          <td>Grumo Appula</td>
                          <td>
                            <span class="badge bg-danger">Inactive</span>
                          </td>
                          <td>
                              <a href="/user-edit">
                                  <box-icon name='edit'></box-icon>
                              </a>
                              <a href="">
                                  <box-icon  name='message-square-x'></box-icon>
                              </a>
                              </td>
                        </tr>
                        <tr>
                          <td>Darius</td>
                          <td>velit@nec.com</td>
                          <td>0309 690 7871</td>
                          <td>Ways</td>
                          <td>
                            <span class="badge bg-success">Active</span>
                          </td>
                          <td>
                              <a href="/user-edit">
                                  <box-icon name='edit'></box-icon>
                              </a>
                              <a href="">
                                  <box-icon  name='message-square-x'></box-icon>
                              </a>
                              </td>
                        </tr>
                        <tr>
                          <td>Oleg</td>
                          <td>rhoncus.id@Aliquamauctorvelit.net</td>
                          <td>0500 441046</td>
                          <td>Rossignol</td>
                          <td>
                            <span class="badge bg-success">Active</span>
                          </td>
                          <td>
                              <a href="/user-edit">
                                  <box-icon name='edit'></box-icon>
                              </a>
                              <a href="">
                                  <box-icon  name='message-square-x'></box-icon>
                              </a>
                              </td>
                        </tr>
                        <tr>
                          <td>Kermit</td>
                          <td>diam.Sed.diam@anteVivamusnon.org</td>
                          <td>(01653) 27844</td>
                          <td>Patna</td>
                          <td>
                            <span class="badge bg-success">Active</span>
                          </td>
                          <td>
                              <a href="/user-edit">
                                  <box-icon name='edit'></box-icon>
                              </a>
                              <a href="">
                                  <box-icon  name='message-square-x'></box-icon>
                              </a>
                              </td>
                        </tr>
                        <tr>
                          <td>Jermaine</td>
                          <td>sodales@nuncsit.org</td>
                          <td>0800 528324</td>
                          <td>Mold</td>
                          <td>
                            <span class="badge bg-success">Active</span>
                          </td>
                          <td>
                              <a href="/user-edit">
                                  <box-icon name='edit'></box-icon>
                              </a>
                              <a href="">
                                  <box-icon  name='message-square-x'></box-icon>
                              </a>
                              </td>
                        </tr>
                        <tr>
                          <td>Ferdinand</td>
                          <td>gravida.molestie@tinciduntadipiscing.org</td>
                          <td>(016977) 4107</td>
                          <td>Marlborough</td>
                          <td>
                            <span class="badge bg-danger">Inactive</span>
                          </td>
                          <td>
                              <a href="/user-edit">
                                  <box-icon name='edit'></box-icon>
                              </a>
                              <a href="">
                                  <box-icon  name='message-square-x'></box-icon>
                              </a>
                              </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
          </div>
          </div>
        </section>
      </div>

@endsection
