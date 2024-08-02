@echo off
for %%a in (F:\Git\Pics\webp\*.jpg) do (
    D:\libwebp\bin\cwebp.exe -q 100 %%a -o F:\Git\Pics\webp\%%~na.webp
    del %%a
)
for %%a in (F:\Git\Pics\webp\*.png) do (
    D:\libwebp\bin\cwebp.exe -q 100 %%a -o F:\Git\Pics\webp\%%~na.webp
    del %%a
)