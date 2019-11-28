<div class="row">
<h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd"> Student Enroll</h1>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <form action="http://[::1]/ci/index.php/student/enroll" method="post">
        <div class="form-group">
            <label for="s_id">Enter Student ID</label>
            <input type="text" name="s_id" class="form-control" id="student_id" place-holder  >
        </div>
        

        <div class="form-group">
        <label for="k">Class Info</label>
            <select name="class" class="form-control" id="k">
                <option value="1">Math</option>
                <option value="2">Dari</option>
                <option value="3">Pashto</option>
                <option value="4">English</option>
                <option value="5">Physics</option>
            </select>
        </div>

        <div class="form-group">
            <label for="f">Fess</label>
            <input type="text" name="fees" class="form-control" id="f">
        </div>

        <div class="form-group">
        <label for="s_id1">Date</label>
        <input type="date" name="date" class="form-control" id="s_id1">
    </div>
        

        <div class="form-group">
            <input type="submit" name="submit" class="form-control" id="s_id" class="btn btn-primary btn-block" >
        </div>
    </form>
    </div>
    <div class="col-lg-2"></div>
</div>