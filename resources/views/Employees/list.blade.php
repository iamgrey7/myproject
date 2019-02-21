
        <div class="">
        @foreach($employees as $employee)
            <tr id="item{{$employee->id}}" class="item{{$employee->id}} @if($employee->is_permanent) warning @endif">
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->address}}</td>

                {{-- <td>
                    {{App\Post::getExcerpt($e->content)}}
                </td> --}}

                <td class="text-center"><input type="checkbox" class="permanent" data-id="{{$employee->id}}" @if ($employee->is_permanent) checked @endif></td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $employee->updated_at)->diffForHumans() }}</td>
                <td>
                    <button id="btnShow" class="show-modal btn btn-success" data-id="{{$employee->id}}" data-name="{{$employee->name}}" data-address="{{$employee->address}}">
                    <i class="fa fa-eye" aria-hidden="true"></i> Show</button>
                    <button class="edit-modal btn btn-info" data-id="{{$employee->id}}" data-name="{{$employee->name}}" data-address="{{$employee->address}}">
                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                    <button class="delete-modal btn btn-danger" data-id="{{$employee->id}}" data-name="{{$employee->name}}" data-address="{{$employee->address}}">
                    <i class="fa fa-trash" aria-hidden="true"></i></span> Delete</button>
                </td>
            </tr>
        @endforeach
        </div>
    </tbody>
</table> 
<div class="">
    {{ $employees->render() }}
</div>
