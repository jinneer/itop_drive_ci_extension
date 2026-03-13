<?php
/**
 * English dictionary for Drive Management extension
 */

Dict::Add('EN US', 'English', 'English', array(
    // Class labels
    'Class:Drive' => 'Drive',
    'Class:Drive+' => 'Tape library drive',
    
    // Class properties
    'Class:Drive/Attribute:name' => 'Name',
    'Class:Drive/Attribute:name+' => 'Drive name',
    
    'Class:Drive/Attribute:tape_library_id' => 'Tape Library',
    'Class:Drive/Attribute:tape_library_id+' => 'The tape library this drive belongs to',
    
    'Class:Drive/Attribute:tape_library_name' => 'Tape Library Name',
    'Class:Drive/Attribute:tape_library_name+' => 'Name of the tape library',
    
    'Class:Drive/Attribute:drive_type' => 'Drive Type',
    'Class:Drive/Attribute:drive_type+' => 'Type/model of the tape drive',
    
    // Drive type enum values
    'Class:Drive/Attribute:drive_type/Value:lto8' => 'LTO-8',
    'Class:Drive/Attribute:drive_type/Value:lto8+' => 'Linear Tape-Open 8',
    
    'Class:Drive/Attribute:drive_type/Value:lto9' => 'LTO-9',
    'Class:Drive/Attribute:drive_type/Value:lto9+' => 'Linear Tape-Open 9',
    
    'Class:Drive/Attribute:drive_type/Value:ts1150' => 'TS1150',
    'Class:Drive/Attribute:drive_type/Value:ts1150+' => 'IBM TS1150',
    
    'Class:Drive/Attribute:drive_type/Value:ts1160' => 'TS1160',
    'Class:Drive/Attribute:drive_type/Value:ts1160+' => 'IBM TS1160',
    
    'Class:Drive/Attribute:drive_type/Value:other' => 'Other',
    'Class:Drive/Attribute:drive_type/Value:other+' => 'Other drive type',
    
    // TapeLibrary reverse relationship
    'Class:TapeLibrary/Attribute:drives_list' => 'Drives',
    'Class:TapeLibrary/Attribute:drives_list+' => 'List of drives in this tape library',
    
    // Menu entries
    'Menu:Drive' => 'Drives',
    'Menu:Drive+' => 'Tape Library Drives',
));
?>
