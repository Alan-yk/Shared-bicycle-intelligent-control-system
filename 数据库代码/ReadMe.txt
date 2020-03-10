本数据库中一共有三种表：bike表(记录车辆信息)，user表(记录用户信息)，borrow表(记录用户与车辆的租借信息)。

bike表中包含：bike_id(车辆id)、position(车辆停放位置)、last_use_time(上次使用时间)、bike_lock(车锁)、
bike_lian(车链)、bike_sha(刹车)、bike_deng(车灯)、bike_kuang(车筐)、bike_tai(车胎).
注：bike_lian、bike_sha、bike_deng、bike_kuang、bike_tai这类字段，
当其值为‘1’时表示该部件正常，当其值为‘0’时表示该部件遭到破坏，需要维修。

user表中包含：user_id(用户id)、username(用户名)、password(登录密码).

borrow表中包含：user_id(用户id)、bike_id(车辆id)、borrow_time(借车时间)、
borrow_position(借车位置)、is_anti(判断是否禁停区)、time(骑行时间)、discount(设定折扣)、
price(骑行费用).
注：borrow_position字段类型是char型，记录了用户借车的位置。is_anti字段当其值为‘0’时表示禁停，其值为‘1’时表示处于电子围栏区域，为‘2’时处于正常区域。