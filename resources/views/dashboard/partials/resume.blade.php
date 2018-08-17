<!-- Main view  -->
<h2>Resume</h2>

<table class="table">
    <tbody>
    <tr>
        <td>
            <a href="{{route('profiles.index')}}">
                <button type="button" class="btn btn-success m-r-sm">{{count($all_pr)}}</button>Profiles
            </a>
        </td>
        <td>
            <a href="{{route('categories.index')}}">
                <button type="button" class="btn btn-info m-r-sm">xyz</button>Categories
            </a>
        </td>
        <td>
            <a href="">
                <button type="button" class="btn btn-info m-r-sm">xyz</button>Posts
            </a>
        </td>
        <td>
            <a href="">
                <button type="button" class="btn btn-info m-r-sm">xyz</button>Post categories
            </a>
        </td>
        <td>
            <a href="{{route('roles.index')}}">
                <button type="button" class="btn btn-danger m-r-sm">{{count($all_roles)}}</button>Roles
            </a>
        </td>
        <td>
            <a href="{{route('status.index')}}">
                <button type="button" class="btn btn-info m-r-sm">4</button>Status
            </a>
        </td>
    </tr>
    </tbody>
</table>