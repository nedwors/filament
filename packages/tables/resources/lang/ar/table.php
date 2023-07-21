<?php

return [

    'columns' => [

        'text' => [
            'more_list_items' => 'و :count إضافية',
        ],

    ],

    'fields' => [

        'bulk_select_page' => [
            'label' => 'تحديد / إلغاء تحديد كافة العناصر للإجراءات الجماعية.',
        ],

        'bulk_select_record' => [
            'label' => 'تحديد / إلغاء تحديد العنصر :key للإجراءات الجماعية',
        ],

        'search' => [
            'label' => 'بحث',
            'placeholder' => 'بحث',
            'indicator' => 'بحث',
        ],

    ],

    'pagination' => [

        'label' => 'التنقل بين الصفحات',

        'overview' => '{1} عرض نتيجة واحدة|[3,10] عرض :first إلي :last من :total نتائج|[2,*] عرض :first إلي :last من :total نتيجة',

        'fields' => [

            'records_per_page' => [

                'label' => 'لكل صفحة',

                'options' => [
                    'all' => 'الكل',
                ],

            ],

        ],

        'actions' => [

            'go_to_page' => [
                'label' => 'انتقل إلى صفحة :page',
            ],

            'next' => [
                'label' => 'التالي',
            ],

            'previous' => [
                'label' => 'السابق',
            ],

        ],

    ],

    'summary' => [

        'heading' => 'الملخص',

        'subheadings' => [
            'all' => 'كافة :label',
            'group' => 'ملخص :group',
            'page' => 'هذه الصفحة',
        ],

        'summarizers' => [

            'average' => [
                'label' => 'المتوسط',
            ],

            'count' => [
                'label' => 'العدد',
            ],

            'sum' => [
                'label' => 'المجموع',
            ],

        ],

    ],

    'actions' => [

        'disable_reordering' => [
            'label' => 'إنهاء إعادة ترتيب السجلات',
        ],

        'enable_reordering' => [
            'label' => 'إعادة ترتيب السجلات',
        ],

        'filter' => [
            'label' => 'تصفية',
        ],

        'group' => [
            'label' => 'مجموعة',
        ],

        'open_bulk_actions' => [
            'label' => 'فتح الإجراءات',
        ],

        'toggle_columns' => [
            'label' => 'تبديل الأعمدة',
        ],

    ],

    'empty' => [

        'heading' => 'لا توجد سجلات',

    ],

    'filters' => [

        'actions' => [

            'remove' => [
                'label' => 'إلغاء الفلاتر',
            ],

            'remove_all' => [
                'label' => 'إلغاء كافة الفلاتر',
                'tooltip' => 'إلغاء كافة الفلاتر',
            ],

            'reset' => [
                'label' => 'إعادة ضبط الفلاتر',
            ],

        ],

        'indicator' => 'الفلاتر النشطة',

        'multi_select' => [
            'placeholder' => 'الكل',
        ],

        'select' => [
            'placeholder' => 'الكل',
        ],

        'trashed' => [

            'label' => 'السجلات المحذوفة',

            'only_trashed' => 'السجلات المحذوفة فقط',

            'with_trashed' => 'مع السجلات المحذوفة',

            'without_trashed' => 'بدون السجلات المحذوفة',

        ],

    ],

    'grouping' => [

        'fields' => [

            'group' => [
                'label' => 'تجميع حسب',
                'placeholder' => 'تجميع حسب',
            ],

            'direction' => [

                'label' => 'إتجاه التجميع',

                'options' => [
                    'asc' => 'تصاعدي',
                    'desc' => 'تنازلي',
                ],

            ],

        ],

    ],

    'reorder_indicator' => 'قم بسحب وإسقاط السجلات بالترتيب.',

    'selection_indicator' => [

        'selected_count' => '{1} تم تحديد سجل واحد|[3,10] تم تحديد :count سجلات |[2,*] تم تحديد :count سجل',

        'actions' => [

            'select_all' => [
                'label' => 'تحديد كل السجلات :count',
            ],

            'deselect_all' => [
                'label' => 'إلغاء تحديد الكل',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'ترتيب حسب',
            ],

            'direction' => [

                'label' => 'اتجاه الترتيب',

                'options' => [
                    'asc' => 'تصاعدي',
                    'desc' => 'تنازلي',
                ],

            ],

        ],

    ],

];
