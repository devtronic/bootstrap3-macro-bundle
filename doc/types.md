# Types

## Dropdown Item 
A dropdown item can be an instance of string or dictionary.

### Separator and Headings
To display a separator, add a string-entry to the item collection with the value `separator`. \
All other strings will be displayed as Headings.

### Linked Item
| Field     | Type    | Description                                       |
|:----------|:-------:|:--------------------------------------------------|
| text      | string  | The displayed text of the item                    |
| href      | string  | The link of the Item                              |
| active    | boolean | If true, the item will be highlighted as "active" |
| disabled  | boolean | If true, the item is disabled                     |

**Example**: `{text: 'Hello World', href: '#', active: true}`

## Button Element
A Button element creates a tag, based upon given properties. If the `href` property is setted,
the tag is `a`, otherwise `button`

| Field      | Type       | Description                                                       |
|:-----------|:----------:|:------------------------------------------------------------------|
| text       | string     | The text                                                          |
| href       | string     | The link. If setted the element-tag is **a** otherwise **button** |
| class      | string     | The button class                                                  |
| attr       | dictionary | Additional tag attributes                                         |

**Example**: `{text: 'My Button', attr: {'ID': 'myButton1', 'onclick': 'alert(\'Hello World\')'}}`

## Nav Item
A nav item must be an instance of dictionary with the following properties.

| Field     | Type    | Description                                       |
|:----------|:-------:|:--------------------------------------------------|
| text      | string  | The displayed text of the item                    |
| href      | string  | The link of the Item                              |
| active    | boolean | If true, the item will be highlighted as "active" |
| disabled  | boolean | If true, the item is disabled                     |

**Example**: `{href: '#', text: 'Profile', active: true}`

## Link
A link must be an instance of dictionary with the following properties.

| Field     | Type    | Description                                       |
|:----------|:-------:|:--------------------------------------------------|
| text      | string  | The displayed text of the item                    |
| href      | string  | The link                                          |

**Example**: `{href: '#', text: 'Profile'}`