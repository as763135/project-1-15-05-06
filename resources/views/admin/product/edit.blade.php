@extends('layouts.master_backend')
@section('con')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Edit Product</h5>
                                <div class="card-body">
                                <form action="{{(url('admin/product/update/'.$product->id)}}"method="post">enctype="multipart/form-data">
                                  @csrf
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      value="{{$product->name}}
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    
                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      value="{{$product->price}}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      name="destricription"
                                      value="{{$product->destricription}}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                      <div class="input-group">
                                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>
                                      <div class="mt-3">
                                        <img src ="{{asset('bakend/upload/resize/'.$product->image}}"alt="">
                                      </div>
                                    

                                    <input type="submit" value="อัพเดท" class="btn btn-primary mt-3">บันทึก</a>
                                    <a href="{{route('p.index')}}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection