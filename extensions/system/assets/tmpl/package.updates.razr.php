<table class="uk-table uk-table-hover">
    <thead>
        <tr>
            <th colspan="2">@trans('Name')</th>
            <th class="pk-table-width-minimum"></th>
        </tr>
    </thead>
    <tbody>
        {{ #packages }}
        <tr>
            <td class="pk-table-width-minimum">
                <img class="uk-img-preserve" src="{{ extra.image }}" width="50" height="50" alt="{{ title }}">
            </td>
            <td>
                <h2 class="uk-h3 uk-margin-bottom-remove pk-extensions-margin-3">{{ title }}</h2>
                <ul class="uk-subnav uk-subnav-line uk-margin-remove">
                    <li><a href="#" data-uk-toggle="{target:'#toggle-{{ name }}'}">@trans('Changelog')</a></li>
                    <li><span>{{ version.version }}</span></li>
                    <li><span>{{ version.released }}</span></li>
                </ul>
                <div id="toggle-{{ name }}" class="uk-hidden uk-margin">{{ version.changelog }}</div>
            </td>
            <td>
                <button class="uk-button uk-button-primary pk-extensions-margin-5" data-install="{{ name }}">@trans('Update')</button>
            </td>
        </tr>
        {{ /packages }}
    </tbody>
</table>