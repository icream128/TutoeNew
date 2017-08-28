<div class="page-container">
<div class="page-content">
    <center><h2>ประวัติการเรียน</h2></center>
    <div class="row" id="result">
    <div class="col-md-8 col-md-offset-2">
           <table class="table">
              <thead>
                 <th><h3>ชื่อวิชา</h3></th>
                 <th><h3>ระดับชั้น</h3></th>
                 <th><h3>วัน</h3></th>
                 <th><h3>เวลา</h3></th>
                 <th><h3>ผู้สอน</h3></th>
              </thead>
              <tbody>
                 @foreach (Theme::get('tutorschedule') as $obj)
                 <tr>
                    <td><a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><h4>{{$obj->subject}}</h4></a></td>
                    <td><a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><h4>{{$obj->level}}</h4></a></td>
                    <td><a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><h4>{{$obj->dayfull}}</h4><</a>/td>
                    <td><a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><h4>{{$obj->name}}</h4></a></td>
                    <td><a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><h4>{{$obj->firstname}} {{$obj->lastname}}</h4></a></td>
                 </tr>
                 @endforeach
              </tbody>
           </table>
        </div>
    </div>
</div>
</div>


