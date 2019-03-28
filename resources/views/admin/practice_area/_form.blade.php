
                @include('admin.layouts._validation_messages')

                <div class="panel-heading p-sm-4">
                    <h3 class="panel-title text-primary" style="font-size: 25px;">Practice area Form</h3>
                </div>

                <div class="form-group">
                    <label for="text" class="control-label col-md-2">Title</label>
                    <div class="col-md-10">
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-md-2">Description</label>
                    <div class="col-md-10">
                        <input type="text" name="description" class="form-control" placeholder="Description">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Upload photo">Image</label>
                    <div class="col-md-4">
                        <input name="image" class="input-file" type="file">
                    </div>
                </div>

