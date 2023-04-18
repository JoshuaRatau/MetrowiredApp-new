<form method="POST" action="{{ url('/store-comment/' . $ticket->id) }}">
    {{ csrf_field() }}
    {{ method_field('put') }}

<div class="row">
    <div class="col-sm-12">
        <br>
        <div class="center">
            <h6>SR603127</h6>
            <p>Completed</p>
        </div>
    </div>

    <div class="col-sm-10">
        <br>
      
        <label for="inputState" class="form-label"><b>Response:</b></label>
        <select name="response" id="inputState" class="form-select">
            <option selected>Select a response</option>
            <option value="Network points installed">Network points installed</option>
            <option value="Network point repaired">Network point repaired</option>
            <option value="User not available_rescheduled">User not available_rescheduled</option>
            <option value="Open day installation">Open day installation</option>
            <option value="Cable issued 1m">Cable issued 1m</option>
            <option value="Cable issued 3m">Cable issued 3m</option>
            <option value="Cable issued 5m">Cable issued 5m</option>
            <option value="Cable issued 10m">Cable issued 10m</option>
            <option value="Duplicate call-call attended to on date">Duplicate call-call attended to on date</option>
            <option value="Network point no longer required">Network point no longer required</option>
        </select>
    </div>
    <div class="col-sm-3">
        <br>
        <input type="number" name="breaks_number" min="1" max="10">
    </div>


    <div class="col-sm-10">
        <br>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Comment:</b></label>
             <p class="text-end"> 250 character limit:</p>
            <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" rows="6" cols="53" maxlength="250" ></textarea>

        </div>


    </div>
    <div class="col-sm-10">
        <div class="text-center">
            <button type="submit" class="btn btn-primary btnLogin">Complete</button>
            </div>
        </form>