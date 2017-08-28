<div class="page-container">
<div class="page-head">
   <div class="container">
      <div class="page-title">
         <a href="{{ url('/createcoursetutor') }}"><button class="tag-item btn btn-sm btn-default"><h4>สร้างคอร์สเรียนที่ต้องการ</h4></button></a>
      </div>
   </div>
   <div class="page-content">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <center><h1>ค้นหาคอร์ส</h1></center>
               <br>
            </div>
            <div class="col-md-8 col-md-offset-2">
               <div class="row">
                    <div class="filter-select row">
                        <div class="col-md-3">
                            <select id="filterBySubject" class="form-control">
                                @foreach (Theme::get('objSubject') as $obj)  
                                <option value="{{$obj->subject}}">{{$obj->subject}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="filterByLevel"  class="form-control">
                                @foreach (Theme::get('objLevel') as $obj)  
                                <option value="{{$obj->level}}">{{$obj->level}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="filterByDay"  class="form-control">
                                @foreach (Theme::get('objDay') as $obj)  
                                <option value="{{$obj->dayfull}}">{{$obj->dayfull}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="filterByDuration"  class="form-control">
                                @foreach (Theme::get('objDuration') as $obj)  
                                <option value="{{$obj->name}}">{{$obj->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div id="tagGroup">
                    </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row" id="result">
            <div class="col-md-12">
               <table class="table">
                  <thead>
                     <th><h3>ชื่อวิชา</h3></th>
                     <th><h3>ระดับชั้น</h3></th>
                     <th><h3>วัน</h3></th>
                     <th><h3>เวลา</h3></th>
                  </thead>
                  <tbody>
                     @foreach (Theme::get('objData') as $obj)
                     <tr>
                        <td><a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><h4 id="title">{{$obj->subject}}</h4></a></td>
                        <td><a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><h4 id="title">{{$obj->level}}</h4></a></td>
                        <td><a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><h4 id="subTitle">{{$obj->dayfull}}</h4></a></td>
                        <td><a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><h4 id="subTitle">{{$obj->name}}</h4></a></td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            <!-- @foreach (Theme::get('objData') as $obj)
            <div class="col-sm-4 col-lg-4 col-md-4 course-list">
               <div class="thumbnail">
                       <a href="{{url('show_detail')}}?schedule_id={{$obj->learner_schedule_id}}"><div class="caption">
                           <h4 id="title">{{$obj->subject}} {{$obj->level}}</h4>
                           <h4 id="subTitle">{{$obj->dayfull}} {{$obj->name}}<h4>
                       </a>
                   </div>
               </div>
               </div>
            </div>
            @endforeach -->
      </div>
   </div>
</div>