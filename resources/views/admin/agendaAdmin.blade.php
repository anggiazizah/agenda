@extends('layouts.master')

@section('content')
<div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Shalat</h5>
			  <div class="table-responsive">
               <table class="table">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>
                      <a href="shalat_shubuh.php">
                        <span>Shalat Shubuh</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>
                      <a href="">
                        <span>Shalat Dzuhur</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>
                      <a href="">
                        <span>Shalat Ashar</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>
                      <a href="">
                        <span>Shalat Maghrib</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>
                      <a href="">
                        <span>Shalat Isya</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>
                      <a href="">
                        <span>Shalat Dhuha</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>
                      <a href="">
                        <span>Shalat Tahajud</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title">Dzikir</h5>
                <div class="table-responsive">
                 <table class="table">
                <tbody>
                  <tr>
                      <th scope="row">1</th>
                      <td>
                      <a href="">
                        <span>Dzikir Pagi</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <th scope="row">2</th>
                      <td>
                      <a href="">
                        <span>Dzikir Petang</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>
                    <a href="">
                      <span>Istighfar</span>
                    </a>
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>
                    <a href="">
                      <span>Shalawat</span>
                    </a>
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->


      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Berbuat Baik</h5>
			  <div class="table-responsive">
               <table class="table">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>
                      <a href="">
                        <span>Perbuatan Baik</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ceramah</h5>
                <div class="table-responsive">
                 <table class="table">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>
                      <a href="">
                        <span>Ceramah</span>
                      </a>
                      </td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

      <input type="button" class="btn btn-primary float-right" value="Setuju">
@endsection