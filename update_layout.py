import os

welcome_path = r"c:/Users/willi/Desktop/KENYAN BADDIES CLUB/resources/views/welcome.blade.php"
guest_path = r"c:/Users/willi/Desktop/KENYAN BADDIES CLUB/resources/views/layouts/guest.blade.php"

with open(welcome_path, 'r', encoding='utf-8') as f:
    lines = f.readlines()

header = lines[:299]
footer = lines[1614:]

guest_content = "".join(header) + "\n  {{ $slot }}\n\n" + "".join(footer)

# add csrf token to head
head_end = -1
for i, line in enumerate(guest_content.split('\n')):
    if '</head>' in line:
        head_end = i
        break

if head_end != -1:
    lines_guest = guest_content.split('\n')
    lines_guest.insert(head_end, '  <meta name="csrf-token" content="{{ csrf_token() }}">')
    guest_content = '\n'.join(lines_guest)

with open(guest_path, 'w', encoding='utf-8') as f:
    f.write(guest_content)
