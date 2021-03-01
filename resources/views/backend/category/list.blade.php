<x-backend>
    <div class="page-header">
        <h3 class="page-title"> Category </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
        </nav>
    </div>
    <div class="row">

        <button class="btn btn-gradient-success ml-auto mb-3">New Category</button>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <table id="add-row" class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>No. </th>
                            <th class="table-auto">Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                          $i=1
                        @endphp
                        @foreach($categories as $category)
                            @php
                            $id = $category->id;
                            $name = $category->name;
                            @endphp
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$name}}</td>
                            <td>
                                <button class="btn btn-rounded btn-gradient-warning">Edit</button>
                                <button class="btn btn-rounded btn-gradient-danger ">Delete</button>
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
