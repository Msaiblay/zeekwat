<x-backend>
    <div class="page-header">
        <h3 class="page-title"> Languages </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Languages</li>
            </ol>
        </nav>
    </div>
    <div class="row">

        <button class="btn btn-success ml-auto mb-3">New Language</button>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <table id="add-row" class="table table-hover">
                        <thead>
                        <tr>
                            <th>No. </th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Jacob</td>
                            <td>Photoshop</td>
                            <td>
                                <button class="btn btn-rounded btn-danger ">Delete</button>
                                <button class="btn btn-rounded btn-warning">Edit</button></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No .</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
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
