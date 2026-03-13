# iTop Drive Extension

## Overview
This iTop 3.2 extension adds a "Drive" CI class for managing tape library drives.

## Features
- **Drive Class**: Inherits from PhysicalDevice
- **Tape Library Association**: Links drives to TapeLibrary instances
- **Drive Types**: Supports LTO-8, LTO-9, TS1150, TS1160, and custom types
- **Bidirectional Relationship**: TapeLibrary shows associated drives

## Installation
1. Copy the entire `itop-drive` folder to your iTop `extensions/` directory
2. Run iTop setup: `php setup/setup.php`
3. The extension will be automatically detected and installed

## File Structure
```
itop-drive/
├── datamodels/
│   └── model.itop-drive.xml       # Data model definition
├── dictionaries/
│   ├── en.dict.itop-drive.php     # English translations
│   └── zh.dict.itop-drive.php     # Chinese translations
├── images/
│   └── drive.png.placeholder.txt  # Icon instructions (replace with actual PNG)
├── module.itop-drive.php          # Module entry point
├── module.xml                     # Extension metadata
└── README.md                      # This file
```

## Configuration

### Drive Class Properties
- **name**: Drive identifier
- **tape_library_id**: Foreign key to TapeLibrary (required)
- **drive_type**: Enumeration (LTO-8, LTO-9, TS1150, TS1160, Other)
- **status**: Inherited from PhysicalDevice
- **serialnumber**: Inherited from PhysicalDevice
- **org_id**: Inherited from PhysicalDevice
- **location_id**: Inherited from PhysicalDevice

### TapeLibrary Extension
Adds `drives_list` attribute to show all drives associated with a tape library.

## Icon
The extension requires a `drive.png` icon (48x48 pixels) in the `images/` folder.
See `images/drive.png.placeholder.txt` for instructions on creating the icon.

## Compatibility
- **iTop Version**: 3.2.0 or higher
- **Dependencies**: itop-config-mgmt 3.2.0

## Author
Generated for iTop 3.2 Extension

## License
AGPL-3.0
