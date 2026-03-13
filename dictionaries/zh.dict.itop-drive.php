<?php
/**
 * Chinese dictionary for Drive Management extension
 */

Dict::Add('ZH CN', 'Chinese', '中文', array(
    // 类标签
    'Class:Drive' => '驱动器',
    'Class:Drive+' => '磁带库驱动器',
    
    // 类属性
    'Class:Drive/Attribute:name' => '名称',
    'Class:Drive/Attribute:name+' => '驱动器名称',
    
    'Class:Drive/Attribute:tape_library_id' => '磁带库',
    'Class:Drive/Attribute:tape_library_id+' => '此驱动器所属的磁带库',
    
    'Class:Drive/Attribute:tape_library_name' => '磁带库名称',
    'Class:Drive/Attribute:tape_library_name+' => '磁带库的名称',
    
    'Class:Drive/Attribute:drive_type' => '驱动器类型',
    'Class:Drive/Attribute:drive_type+' => '磁带驱动器的型号/类型',
    
    // 驱动器类型枚举值
    'Class:Drive/Attribute:drive_type/Value:lto8' => 'LTO-8',
    'Class:Drive/Attribute:drive_type/Value:lto8+' => 'Linear Tape-Open 8',
    
    'Class:Drive/Attribute:drive_type/Value:lto9' => 'LTO-9',
    'Class:Drive/Attribute:drive_type/Value:lto9+' => 'Linear Tape-Open 9',
    
    'Class:Drive/Attribute:drive_type/Value:ts1150' => 'TS1150',
    'Class:Drive/Attribute:drive_type/Value:ts1150+' => 'IBM TS1150',
    
    'Class:Drive/Attribute:drive_type/Value:ts1160' => 'TS1160',
    'Class:Drive/Attribute:drive_type/Value:ts1160+' => 'IBM TS1160',
    
    'Class:Drive/Attribute:drive_type/Value:other' => '其他',
    'Class:Drive/Attribute:drive_type/Value:other+' => '其他驱动器类型',
    
    // TapeLibrary 反向关联
    'Class:TapeLibrary/Attribute:drives_list' => '驱动器',
    'Class:TapeLibrary/Attribute:drives_list+' => '此磁带库中的驱动器列表',
    
    // 菜单项
    'Menu:Drive' => '驱动器',
    'Menu:Drive+' => '磁带库驱动器',
));
?>
