echo "Removing existing archives..."
rm wp-comment-killer.zip wp-comment-killer-w-installer.zip

echo ""
echo "Generating new zip file w/installer..."
zip -r wp-comment-killer-w-installer.zip wp-comment-killer/

echo ""
echo "Generating new zip file w/out installer..."
zip -r wp-comment-killer.zip wp-comment-killer/ -x manual*