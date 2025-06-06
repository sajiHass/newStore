<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'يجب قبول الحقل :attribute',
    'active_url'           => 'الحقل :attribute لا يُمثّل رابطًا صحيحًا',
    'after'                => 'يجب على الحقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'يجب أن لا يحتوي الحقل :attribute سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي الحقل :attribute على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array'                => 'يجب أن يكون الحقل :attribute ًمصفوفة',
    'before'               => 'يجب على الحقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',
    ],
    'boolean'              => 'يجب أن تكون قيمة الحقل :attribute إما true أو false ',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date'                 => 'الحقل :attribute ليس تاريخًا صحيحًا',
    'date_format'          => 'لا يتوافق الحقل :attribute مع الشكل :format.',
    'different'            => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي الحقل :attribute على :digits رقمًا/أرقام',
    'digits_between'       => 'يجب أن يحتوي الحقل :attribute ما بين :min و :max رقمًا/أرقام ',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'للحقل :attribute قيمة مُكرّرة.',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists'               => 'الحقل :attribute لاغٍ',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'الحقل :attribute إجباري',
    'image'                => 'يجب أن يكون الحقل :attribute صورةً',
    'in'                   => 'الحقل :attribute لاغٍ',
    'in_array'             => 'الحقل :attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون الحقل :attribute عددًا صحيحًا',
    'ip'                   => 'يجب أن يكون الحقل :attribute عنوان IP ذي بُنية صحيحة',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'يجب أن يكون الحقل :attribute نصآ من نوع JSON.',
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أصغر من :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أكبر من :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',
        'string'  => 'يجب أن يكون طول النص :attribute أكبر من :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in'               => 'الحقل :attribute لاغٍ',
    'numeric'              => 'يجب على الحقل :attribute أن يكون رقمًا',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'صيغة الحقل :attribute .غير صحيحة',
    'required'             => 'الحقل :attribute مطلوب.',
    'required_if'          => 'الحقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => 'الحقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => 'الحقل :attribute إذا توفّر :values.',
    'required_with_all'    => 'الحقل :attribute إذا توفّر :values.',
    'required_without'     => 'الحقل :attribute إذا لم يتوفّر :values.',
    'required_without_all' => 'الحقل :attribute إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق الحقل :attribute مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',
        'string'  => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',
        'array'   => 'يجب أن يحتوي الحقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',
    ],
    'string'               => 'يجب أن يكون الحقل :attribute نصآ.',
    'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique'               => 'قيمة الحقل :attribute مُستخدمة من قبل',
    'url'                  => 'صيغة الرابط :attribute غير صحيحة',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'status' => 'الحالة',
        'store_area_id' => 'منطقة المتجر',
        'minimum' => 'الحد الأدنى',
        'delivery_cost' => 'رسوم التوصيل',
        'product_id' => 'المنتج',
        'address_id' => 'العنوان',
        'payment_type' => 'نوع الددفع',
        'additions' => 'الاضافات',
        'calories' => 'السعرات الحرارية',
        'unit' => 'الوحدة',
        'extra_images' => 'صور اضافية',
        'category_id' => 'التصنيف',
        'text' => 'النص',
        'position_id' => 'الوظيفة',
        'store_id' => 'المتجر',
        'accept_condition' => 'الموافقة على الشروط',
        'longitude' => 'الاحداثيات',
        'latitude' => 'الاحداثيات',
        'commercial_registeration_file' => 'السجل التجاري',
        'tax_number' => 'الرقم الضريبي',
        'license_number' => 'رقم الترخيص',
        'telephone' => 'الهاتف',
        'store_name' => 'اسم المتجر',
        'owner_mobile' => 'رقم التاجر',
        'owner_name' => 'اسم التاجر',
        'street' => 'الشارع',
        'block' => 'الحي',
        'address' => 'العنوان',
        'area_id' => 'المنطقة',
        'code' => 'الكود',
        'address_name' => 'اسم العنوان',
        'country_id' => 'الدولة',
        'city_id' => 'المدينة',
        'gender' => 'الجنس',
        'date_of_birth' => 'تاريخ الميلاد',
        'last_name' => 'الاسم الاخير',
        'first_name' => 'الاسم الاول',
        'full_name' => 'الاسم بالكامل',
        'device_type' => 'نوع الجهاز',
        'mobile' => 'جوال',
        'name' => 'الاسم',
        'email' => 'البريد الالكتروني',
        'password' => 'كلمة المرور',
        'type' => 'النوع',
        'confirm_password' => 'تأكيد كلمة المرور',
        'description' => 'الوصف',
        'descriptions_en' => 'الوصف انجليزي',
        'descriptions_ar' => 'الوصف عربي',
        'full_description' => 'الوصف الكامل',
        'image' => 'الصورة',
        'opening_time' => 'وقت البدء',
        'closing_time' => 'وقت الاغلاق',
        'main_category' => 'التصنيف الرئيسي',
        'job_id' => 'المهنة',
        'profile_image' => 'الصورة',
        'sub_Category' => 'التصنيف الرئيسي',
        'activity_id' => 'النشاط',
        'user_id' => 'رقم العضو',
        'name_ar' => 'الاسم عربي',
        'name_en' => 'الاسم انجليزي',
        'new_password' => 'كلمة المرور الجديدة',
        'old_password' => 'كلمة المرور الحالية',
        'description_ar' => 'الوصف بالعربي',
        'description_en' => 'الوصف انجليزي',
        'price' => 'السعر',
        'percent' => 'القيمة',
        'latitude' => 'احداثيات الطول',
        'longitude' => 'احداثيات العرض',
        'color_and_size' => 'اللون ":color" والحجم ":size"',
        'color_only' => 'اللون ":color"',
        'size_only' => 'الحجم ":size"',
        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'الأدوار المرفقة',
                    'dependencies'     => 'المتعلقات',
                    'display_name'     => 'إسم العرض',
                    'group'            => 'المجموعة',
                    'group_sort'       => 'ترتيب المجموعة',

                    'groups' => [
                        'name' => 'إسم المجموعة',
                    ],

                    'name'   => 'الإسم',
                    'system' => 'نظام؟',

                ],

                'roles' => [
                    'associated_permissions' => 'الصلاحيات المرفقة',
                    'name'                   => 'الإسم',
                    'sort'                   => 'الترتيب',

                ],

                'users' => [
                    'active'                  => 'مفعل',
                    'associated_roles'        => 'الأدوار المرفقة',
                    'confirmed'               => 'مؤكد',
                    'mobile'               => 'الجوال',
                    'email'                   => 'عنوان البريد الإلكتروني',
                    'name'                    => 'الإسم',
                    'other_permissions'       => 'الصلاحيات الأخرى',
                    'password'                => 'كلمة المرور',
                    'password_confirmation'   => 'تأكيد كلمة المرور',
                    'send_confirmation_email' => 'إرسال رسالة التفعيل',
                ],
            ],
        ],

        'frontend' => [
            'email'                     => 'عنوان البريد الإلكتروني',
            'name'                      => 'الإسم',
            'password'                  => 'كلمة المرور',
            'password_confirmation'     => 'تأكيد كلمة المرور',
            'phone' => 'الهاتف',
            'mobile' => 'جوال',
            'message' => 'الرسالة',
            'old_password'              => 'كلمة المرور القديمة',
            'new_password'              => 'كلمة المرور الجديدة',
            'new_password_confirmation' => 'تأكيد كلمة المرور الجديدة',
        ],
    ],
    'unique_variant_sku' => 'يجب أن يكون رمز المنتج (SKU) لـ :variant_info فريدًا.',

];
