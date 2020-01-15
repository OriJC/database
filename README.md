# 遊戲選手與戰隊資料庫

第八組

| 組員名字 |   學號    |
| :------: | :-------: |
|  賴岳彤  | B06502064 |
|  陳旨鋒  | B06705042 |
|  陳一慈  | B06705022 |
|  彭穎飛  | B06705046 |

我們使用的是HTML和CSS來架設前端，後端則是使用PHP, SQL

## 動機

最近電子競技的產業越來越大，而且喜愛大遊戲的我們就決定寫個關於職業遊戲玩家的資料庫。此資料庫涵蓋玩家、教練和經理的基本資訊，比賽的資訊等等。網路上沒什麼涵蓋許多遊戲戰隊的資料的搜尋系統，因此我們決定做一個遊戲選手與戰隊資料庫。

當然我們最大的動機就是完成功課！好好拿學分QQ

## 系統架構介紹

![img](https://lh5.googleusercontent.com/OO0d75-iY-uXO6BgtnwPDtnCxkq27oj3psnn6LmaRnmxOwSHsO3_smp60XlVgUI3fRCjZsA9t3-OofHuoi4kjM8EuGewB8qX-co7hPMMN9vvMdYDjycim69YTS8AFa1Q6spupZih)

- Player (Name, Salary, Nationality, <u>P_SSID</u>, <u>P_Team_ID</u>)
  - Name是記錄玩家的名字
  - Salary是記錄他的年薪
  - Nationality是記錄他的國籍
  - P_SSID是記錄玩家個別遊戲賬戶的ID
  - P_Team_ID是記錄他的戰隊的ID
- Sponsor (<u>Sponsor_ID</u>, Sponsor_Name)
  - Sponsor_ID是記錄贊助商的ID
  - Sponsor_Name是記錄贊助商的名字
- Team (Team_Color, Team_Name, <u>Team_ID</u>, <u>T_M_SSID</u>, <u>T_Coach_ID</u>, <u>T_Game_ID</u>)
  - Team_Color是記錄戰隊的主要顏色
  - Team_Name是記錄
  - Team_ID是記錄
  - T_M_SSID是記錄
  - T_Coach_ID是記錄
  - T_Game_ID是記錄
- Manager (Salary, Nationality, Name, <u>M_SSID</u>)
   - Salary是記錄
   - Nationality是記錄
   - Name是記錄
   - M_SSID是記錄
- Coach (Coach_Name , <u>Coach_ID</u>)
   - Coach_Name是記錄
   - Coach_ID是記錄
- Game (Game_title, Category, <u>Game_ID, G_Producer_ID</u>)
   - Game_title是記錄
   - Category是記錄
   - Game_ID是記錄
   - G_Producer_ID是記錄
- Game_Producer (Company_Name, <u>Company_ID</u>)
   - Company_Name是記錄
   - Company_ID是記錄
- Competition (Arena, Regional, Name, <u>Com_ID, C_Game_ID</u>)
   - Arena是記錄
   - Regional是記錄
   - Name是記錄
   - Com_ID是記錄
   - C_Game_ID是記錄
- Competition_History (<u>Hist_ID, Com_ID</u>, Name, Reward, Date)
   - Hist_ID是記錄
   - Com_ID是記錄
   - Name是記錄
   - Reward是記錄
   - Date是記錄
- Has_Played (<u>P_SSID, Game_ID</u>)
   - P_SSID是記錄
   - Game_ID是記錄
- Has_Joined (<u>P_SSID, Com_ID</u>)
   - P_SSID是記錄
   - Com_ID是記錄
- Is_Sponsor (<u>Team_ID, Sponsor_ID</u>)
   - Team_ID是記錄
   - Sponsor_ID是記錄

## 系統功能介紹

## 未來展望

## 心得
