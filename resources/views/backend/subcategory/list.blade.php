<x-backend>
    <div class="page-header">
        <h3 class="page-title"> Subategories </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Subategories</li>
            </ol>
        </nav>
    </div>
    <div class="row">

        <button class="btn btn-gradient-success ml-auto mb-3">New Subcategory</button>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <table id="add-row" class="table table-hover">
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
