<table class="table table-bordered  table-striped table-hover">
<h1 style="margin-bottom: 10px ;text-align: center;border-bottom: 1px solid #ddd">Enroll List</h1>
    <tr>
        <th>Student_id</th>
        <th>Student_name </th>
        <th>class</th>
        <th>Fess</th>
        <th>Date</th>
    </tr>
    <?php foreach($enrollment as $enroll): ?>
    <tr>
        <td><?=$enroll->student_id;?></td>
        <td><?=$enroll->student_name;?></td>
        <td><?=$enroll->class_name;?></td>
        <td><?=$enroll->fess;?></td>
        <td><?=$enroll->started_date;?></td>
       
    </tr>
    <?php endforeach;?>
</table>