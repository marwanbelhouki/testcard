#!/bin/bash

# اسم ملف APK
APK_FILE="ready.apk"

# معرف التطبيق
APP_ID="earl.including.either"

# تثبيت التطبيق
echo "Installing $APK_FILE..."
pm install -r $APK_FILE  # استخدم 'pm' لتثبيت التطبيق

# تشغيل التطبيق
echo "Starting the installed app..."
am start -n $APP_ID/.MainActivity  # استخدم 'am' لتشغيل التطبيق
