folder_list
============

PyroCMS Fieldtype that adds a Folder Select List for a chosen folder to the Streams Fieldtypes.

Simply returns the folder array for the selected folder, which has the following variables:

{{ field_slug:id }}
{{ field_slug:parent_id }}
{{ field_slug:slug }}
{{ field_slug:name }}
{{ field_slug:location }}
{{ field_slug:remote_container }}
{{ field_slug:date_added }}
{{ field_slug:root_id }}
{{ field_slug:depth }}
{{ field_slug:count_files }}
{{ field_slug:count_subfolders }}
{{ field_slug:virtual_path }}