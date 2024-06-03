@extends('web.backend.layouts.dashboard')
    @section('content')
    <div class="row gy-3">
                <div class="col-md-6 col-lg-4">
                  <div class="demo-inline-spacing">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Media /</span> Video Documentation</h4>
                        <a  class="btn btn-primary" href="{{url('admin/post-videos')}}">
                          <span class="tf-icons bx bx-plus-circle me-1"></span>Create
                        </a>
                      </div>  
                </div>
              </div>
  
                <hr class="my-5">
  
                <!-- Striped Rows -->
                <div class="card">
                  <div class="table">
                    <table class="table table-striped data-table videos-table">
                      <thead class="text-center">
                        <tr>
                          <th>No</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--/ Striped Rows -->
  
                <hr class="my-5">
      <!-- Asset javascript pages -->
    @stop