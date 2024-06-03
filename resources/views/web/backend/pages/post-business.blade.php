@extends('web.backend.layouts.dashboard')
    @section('content')
    
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Business /</span> Post Business</h4>
  
  <!-- Form Post New Business -->
  <div class="row">
    <!-- Form Element -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Create New Business</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Business Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-name" placeholder="">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
              <div class="col-sm-10">
                <textarea id="basic-default-message" class="form-control" placeholder="" aria-label="" aria-describedby="basic-icon-default-message2"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="formFile" class="col-sm-2 col-form-label">Image Banner</label>
              <div class="col-sm-10">
                  <input class="form-control" type="file" id="formFile">
              </div> 
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    @stop