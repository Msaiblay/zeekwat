<x-backend>
    <div class="page-header">
        <h3 class="page-title"> Subcategory </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Subcategory</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <a class="btn btn-gradient-success ml-auto mb-3" href="{{route('subcategories.create')}}">
            <i class='bx bx-plus'></i>
        New SubCategory</a>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body"><table id="add-row" class="table table-hover">
                        <thead>
                        <tr>
                            <th>No. </th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i =1;
                        @endphp
                        @foreach($subcategories as $subcategory)
                            @php
                                $id=$subcategory->id;
                                $name=$subcategory->name;
                                $categoryid = $subcategory->category_id;
                                $categoryname =$categories[$categoryid-1]->name;
                            @endphp
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$name}}</td>
                                <td>{{$categoryname}}</td>
                                <td>

                                    <a href="{{route('subcategories.edit',$id)}}" class="btn btn-rounded btn-gradient-warning">
                                        Edit </a>

                                    <form class="d-inline-block" action="{{route ('subcategories.destroy',$id)}}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                        @csrf
                                        @method('DELETE')
                                </span>
                                        <button class="btn btn-rounded btn-gradient-danger ">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-backend>
<script>
    import Button from "@/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
