# Instagram API Setup Guide

## How to Connect Your Instagram Account

### Step 1: Create Instagram Business Account
1. Go to [business.instagram.com](https://business.instagram.com)
2. Convert your personal Instagram account to a business account
3. Link it to a Facebook Page

### Step 2: Create Facebook Developer App
1. Go to [developers.facebook.com](https://developers.facebook.com)
2. Create a new app or use existing one
3. Add "Instagram Basic Display" product to your app

### Step 3: Get Access Token
1. In your Facebook Developer app, go to Instagram Basic Display
2. Generate a short-lived access token
3. Exchange it for a long-lived token (60 days validity)

### Step 4: Get User ID
1. Use the Graph API Explorer: [developers.facebook.com/tools/explorer](https://developers.facebook.com/tools/explorer)
2. Test the API call: `GET /me?fields=id,username`
3. Note down your Instagram User ID

### Step 5: Configure Your Laravel App
Add these to your `.env` file:

```env
INSTAGRAM_ACCESS_TOKEN=your_long_lived_access_token_here
INSTAGRAM_USER_ID=your_instagram_user_id_here
```

### Step 6: Test the Integration
1. Upload some posts/reels to your Instagram
2. Visit your website footer
3. You should see the latest 4 posts (1 large + 3 in slider)

## Features
- ✅ Fetches latest 4 Instagram posts automatically
- ✅ Shows 1 large featured post
- ✅ 3 smaller posts in horizontal slider
- ✅ Handles both images and videos (shows thumbnails for videos)
- ✅ Links directly to Instagram posts
- ✅ Responsive design for mobile

## Troubleshooting
- If posts don't appear, check your `.env` configuration
- Make sure your access token is valid (long-lived tokens last 60 days)
- Instagram API has rate limits, so don't refresh too frequently
- Videos show thumbnail images, not playable videos

## Alternative (Manual Method)
If API setup is too complex, you can manually add Instagram posts through admin panel by creating a simple CRUD interface for Instagram posts.