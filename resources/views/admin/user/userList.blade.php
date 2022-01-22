 @php $n=0 @endphp
@forelse($user as $row)
<tr id="category_{{$row->id}}">
    <td>{{++$n}}</td>
    <td><img src="{{URL::to('storage/app/public/uploads/users/'.$row->profile_pic)}}" width="50" height="50" style="border-radius: 50%;"></td> 
    <td class="catname">{{$row->first_name}} {{$row->last_name}}</td>   
    <td class="catname">{{$row->email}}</td>
    <td class="catname">{{$row->phone}}</td>   
    <td>
		<a class="status" data-id="{{ $row->id }}" style="cursor: pointer;">
		<span class="badge badge-pill  {{$row->status == '0' ? 'badge-danger' : 'badge-success'}}">{{$row->status == '0' ? 'Deactive' : 'Active'}} </span>
		</a>
    </td>                
    <td>
        <a href="{{URL::to('admin/user/edit/'.$row->id)}}" class="btn btn-success btn-sm btn-add btn-edit-vendor" ><i class="bx bx-edit-alt"></i></a> 
        <a class="btn btn-danger btn-sm btn-add btn-edit-vendor delete" href="javascript:void(0);" data-id="{{$row->id}}"><i class="bx bx-trash-alt"></i></a> 

    </td>
</tr>
@empty
@endforelse