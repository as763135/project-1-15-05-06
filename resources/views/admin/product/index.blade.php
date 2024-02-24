@extends('layouts.master_backend')
@section('con')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">Products</h5>
                            <div class="table-responsive text-nowrap">
                                <a href="{{url('admin/product/create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                              <table class="table mt-4">
                                <thead class="table-dark">
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>images</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                  <tr>
                                  <td>1</td>
                                  <td>iphone 14 Pro Max</td>
                                  <td>iphone.jpg</td>
                                  <td>45,990 บาท</td>
                                  <td>ผลิตโดยบริษัทแอปเปิ้ล</td>
                                  <td>2022-07-25 12:46:29</td>
                                  <td>2022-07-25 12:46:29</td>
                                  <td>
                                    <a href="#"><i class='bx bxs-edit'></i></a>
                                    <a href="#"><i class='bx bx-trash'></i></a>
                                  </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

@endsection