@extends('web.backend.layouts.dashboard')
    @section('content')
    <div class="row gy-3">
                <div class="col-md-6 col-lg-4">
                  <div class="demo-inline-spacing">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Our Business</h4>
                        <a  class="btn btn-primary" href="{{url('admin/post-business')}}">
                          <span class="tf-icons bx bx-plus-circle me-1"></span>Create
                        </a>
                      </div>  
                </div>
              </div>
                <hr class="my-5">
                <!-- Style variation -->
                <!-- <h5 class="pb-1 mb-4">Style variation</h5> -->
                <div class="row">
                  <div class="col-md-6 col-xl-4">
                    <div class="card bg-primary text-white mb-3">
                      <div class="card-body">
                        <h5 class="card-title text-white">Mobility Technology</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card bg-secondary text-white mb-3">
                      <div class="card-body">
                        <h5 class="card-title text-white">Ticketing Systemn & Reservation</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card bg-success text-white mb-3">
                      <div class="card-body">
                        <h5 class="card-title text-white">Payment System</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card bg-danger text-white mb-3">
                      <div class="card-body">
                        <h5 class="card-title text-white">IT Service Management</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card bg-warning text-white mb-3">
                      <div class="card-body">
                        <h5 class="card-title text-white">Logistics & Delivery System</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card bg-info text-white mb-3">
                      <div class="card-body">
                        <h5 class="card-title text-white">Live Streaming Platform</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                      </div>
                    </div>
                  </div>
                </div>
    @stop