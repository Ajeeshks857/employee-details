<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.avatar')</th>
                <td><img src="{{ $user->picture }}" class="user-profile-image" /></td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.name')</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.email')</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>@lang('Building No')</th>
                <td>{{ $user->building_no ?? 'N/A' }}</td>
            </tr>

            <tr>
                <th>@lang('Street Name')</th>
                <td>{{ $user->street_name ?? 'N/A' }}</td>
            </tr>

            <tr>
                <th>@lang('City')</th>
                <td>{{ $user->city ?? 'N/A' }}</td>
            </tr>

            <tr>
                <th>@lang('State')</th>
                <td>{{ $user->state ?? 'N/A' }}</td>
            </tr>

            <tr>
                <th>@lang('Country')</th>
                <td>{{ $user->country ?? 'N/A' }}</td>
            </tr>

            <tr>
                <th>@lang('Pincode')</th>
                <td>{{ $user->pincode ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.status')</th>
                <td>@include('backend.auth.user.includes.status', ['user' => $user])</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.confirmed')</th>
                <td>@include('backend.auth.user.includes.confirm', ['user' => $user])</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.timezone')</th>
                <td>{{ $user->timezone }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.last_login_at')</th>
                <td>
                    @if($user->last_login_at)
                        {{ timezone()->convertToLocal($user->last_login_at) }}
                    @else
                        N/A
                    @endif
                </td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.last_login_ip')</th>
                <td>{{ $user->last_login_ip ?? 'N/A' }}</td>
            </tr>
        </table>
    </div>
</div><!--table-responsive-->
