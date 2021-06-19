-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2020 at 04:51 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beta_beloved`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `country_slug` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `saying` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `title`, `category_id`, `country_slug`, `author`, `cover`, `flag`, `saying`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 1, 'afghanistan', 'Bill Clinton', 'd42ead5f3b5f07a08020ac65431c78b0.jpg', '292b1c21318926fbd225f2f1ee78ac61.gif', 'When our memories outweigh our dreams, we have grown old.', 0, '2020-06-25 14:18:46', NULL),
(2, 'Antigua and Barbuda', 2, 'antigua_and_barbuda', 'Henry Wadsworth Longfellow', 'eff12335dc5956297b0779c52409b63c.jpg', 'bd327908894767651360a3ae8412e3a1.gif', 'He spoke well who said that graves are the footprints of angels.', 0, '2020-06-25 14:25:07', '2020-07-16 07:00:00'),
(3, 'Argentina', 1, 'argentina', 'Haruki Murakami, Kafka on the Shore', 'f6fd466db70e6068538d732a9e32f025.jpg', 'f459015f13291ed9d9dd03f171d384eb.gif', 'Memories warm you up from the inside. But they also tear you apart', 0, '2020-06-25 14:26:44', '2020-07-16 07:00:00'),
(4, 'Australia', 1, 'australia', 'John Green, Paper Towns', 'c335b5a6c49a6c0dcffe1311916cc2a8.jpg', '39e4dc735cb30616a6986f40466a3be5.gif', 'The town was paper, but the memories were not', 0, '2020-06-25 14:28:32', '2020-07-16 07:00:00'),
(5, 'Bahamas', 2, 'bahamas', 'Eileen Elias Freeman', '3a656062050b84d3f4da95df35716010.png', 'ce2d4ccaba1f59e60465b959521066bc.gif', 'The angels are always near to those who are grieving, to whisper to them that their loved ones are safe in the hand of God.', 0, '2020-06-25 14:30:11', '2020-07-15 07:00:00'),
(6, 'Barbados', 2, 'barbados', 'Queen Elizabeth II', 'a7eee6248ffdf2b16e4212fc7855d7ee.jpg', '4e1fae8d28bf212587dc589e24a8b7cf.gif', 'Grief is the price we pay for love.', 0, '2020-06-25 14:31:42', '2020-07-16 07:00:00'),
(7, 'Belize Islands', 2, 'belize_islands', 'Psalm 147:3', 'bf1494ed28e00a4c265f1656513e0a4d.png', '263fc93c7faeef6b7abc7bca3053ee02.gif', 'He heals the broken hearted and binds up their wounds.', 0, '2020-06-25 14:33:37', '2020-07-17 07:00:00'),
(8, 'Botswana', 1, 'botswana', 'Lois Lowry, The Giver', 'b7ef4fd70c50b492030990cc14b351ea.jpg', 'd4bc83db56fd49474cf3722014816559.gif', 'The worst part of holding the memories is not the pain. It\'s the loneliness of it. Memories need to be shared.', 0, '2020-06-25 14:36:31', '2020-07-15 07:00:00'),
(9, 'Brazil', 1, 'brazil', 'F. Scott Fitzgerald, This Side of Paradise', 'a5dcc51586e865170e8d95233e26e10a.jpg', '5c4c2a8949bbdf8b6c26f441150230f7.gif', 'I don\'t want to repeat my innocence. I want the pleasure of losing it again.', 0, '2020-06-25 14:37:52', '2020-07-16 07:00:00'),
(10, 'Cambodia', 1, 'cambodia', 'haruki murakami', '6ae01b105d285e4bef51c97d92803ca7.jpg', 'fa9d0347d90ae634d51d6cf215b41044.gif', 'No matter how much suffering you went through, you never wanted to let go of those memories.', 0, '2020-06-25 14:40:06', '2020-07-16 07:00:00'),
(11, 'Cameroon', 1, 'cameroon', 'John Banville, The Sea', 'd808a6448f2c6d0ad0a8e41aa4921ad2.jpg', 'ce87e5317149d534d1bf43ebe2d64fe9.gif', 'The past beats inside me like a second heart.', 0, '2020-06-25 14:41:42', '2020-07-16 07:00:00'),
(12, 'Canada', 1, 'canada', 'Karl Lagerfeld', '47c65e98785b35e03cf09164985005da.png', '124e896fdab111390012625c6853c680.gif', 'What i like about photographs is that they capture a moment that’s gone forever, impossible to reproduce', 0, '2020-06-25 14:43:15', '2020-07-17 07:00:00'),
(13, 'China', 1, 'china', 'T.S. Eliot', 'e0cf3758ffc96cb4170b97f766570eb6.jpg', '1ef818c8cb8548e8da14ece76e7b7610.gif', 'Sometimes things become possible if we want them bad enough.', 0, '2020-06-25 14:45:31', '2020-07-16 07:00:00'),
(14, 'Cuba', 2, 'cuba', 'Matthew 5:4', '41a13b5e7471e99044aab5085e917838.png', '3de69a42b39c964649e0ea99e4a66e6a.gif', 'Blessed are those who mourn, for they shall be comforted.', 0, '2020-06-25 14:47:01', '2020-07-16 07:00:00'),
(15, 'Denmark', 1, 'denmark', 'Haruki Murakami, Kafka on the Shore', '2bd13f60ba459785d1acd791fefd04f0.png', '96c864b182f0bd35e9ba76f9bbd4d8ca.gif', 'Memories warm you up from the inside. But they also tear you apart', 0, '2020-06-25 14:50:25', '2020-07-17 07:00:00'),
(16, 'Dominica', 2, 'dominica', 'Kahlil Gibran', '482d084e8ec62fdfec0d8dbb71347062.jpg', 'abd85f777345b0590f0ace610a34faed.gif', 'For what is it to die but to stand naked in the wind and to melt into the sun? And what is it to cease breathing, but to free the breath from its restless tides that it may rise and expand and seek God unencumbered?', 0, '2020-06-25 14:52:10', '2020-07-16 07:00:00'),
(17, 'Dominican Republic', 2, 'dominican_republic', 'Kahlil Gibran', '0844107b9a39996d7cdf74b236407868.jpg', 'b265de2173f30361762cc992674dfbf8.gif', 'Dry your tears, my friends, and raise your heads as the flowers raise their crowns to greet the dawn.Look at the bride of Death standing like a column of light between my bed and the infinite; Hold your breath and listen with me to the beckoning rustle of', 0, '2020-06-25 14:53:41', '2020-07-16 07:00:00'),
(18, 'Ecuador', 1, 'ecuador', 'Lois Lowry, The Giver', '75b47076a8eb19fea5d6543ed2f2f67a.png', '431bc801ab69b6bf2fcd83ea4567bbc3.gif', 'The worst part of holding the memories is not the pain. It\'s the loneliness of it. Memories need to be shared.', 0, '2020-06-25 14:54:57', '2020-07-15 07:00:00'),
(19, 'Egypt', 1, 'egypt', 'haruki murakami', 'f14c1d28ca71b35cfbbebef1cd483386.png', '19ad71852553431aabd968df1a3445d0.gif', 'No matter how much suffering you went through, you never wanted to let go of those memories.', 0, '2020-06-25 14:56:30', '2020-07-17 07:00:00'),
(20, 'Ethiopia', 1, 'ethiopia', 'John Green, Paper Towns', 'b81e8a34692210b3a08e20f92039741d.png', '52407666570b7fdd3495de1669ab28e1.gif', 'The town was paper, but the memories were not', 0, '2020-06-25 14:58:27', '2020-07-17 07:00:00'),
(21, 'France', 1, 'france', 'Ama Ata Aidoo', 'f87f5700e8ac5a69089fd748e0485960.jpg', 'ab9aa5632ef3e3ce5728d601edfc282c.gif', 'Humans, not places, make memories.', 0, '2020-06-25 15:00:20', '2020-07-16 07:00:00'),
(22, 'Gabon', 1, 'gabon', 'Cassandra Clare, City of Heavenly Fire', '8e7bc0820c8666e1156d548dd7c2564b.png', '7550d4779a306dddefa3a182661b495b.gif', 'There are memories that time does not erase... Forever does not make loss forgettable, only bearable.', 0, '2020-06-25 15:01:48', '2020-07-17 07:00:00'),
(23, 'Ghana', 1, 'ghana', 'L.M. Montgomery, The Story Girl', 'cad55406ddcba7288a9bda7357325b94.png', 'd3ff6980f32b5dba04d45d1b5da7c454.gif', 'Nothing is ever really lost to us as long as we remember it.', 0, '2020-06-25 15:03:10', '2020-07-17 07:00:00'),
(24, 'Grenada', 2, 'grenada', 'Kahlil Gibran', '9b1186c08b06618d169ab300739e13ac.png', '876288d0593c3b254087d7685337ea47.gif', 'Come close and bid me farewell; touch my eyes with smiling lips.  Let the children grasp my hands with soft and rosy fingers;  Let the ages place their veined hands upon my head and bless me;  Let the virgins come close and see the shadow of God in my eye', 0, '2020-06-25 15:04:30', '2020-07-16 07:00:00'),
(27, 'India', 1, 'india', 'Shannon L. Alder', '1e44b823cb05d5b4d65518b32f006d42.jpg', 'ab97e10d7715c8d6cb97d4035b1dad23.gif', 'There comes a time in your life when you have to choose to turn the page, write another book or simply close it.', 0, '2020-06-29 13:32:24', '2020-07-16 07:00:00'),
(28, 'Ireland', 1, 'ireland', 'Nicholas Sparks, A Walk to Remember', 'e1e619f12797de6ad21caa93f58d20b0.jpg', 'd9559c3e1f40af66c1341228c86982d8.gif', 'There are moments when I wish I could roll back the clock and take all the sadness away, but I have the feeling that if I did, the joy would be gone as well.', 0, '2020-06-29 13:34:22', '2020-07-16 07:00:00'),
(29, 'Italy', 1, 'italy', 'L.P. Hartley, The Go-Between', '0f566de2f27df821a90e6ec6237885fb.jpg', '25c78534999cf31606f136219908f728.gif', 'The past is a foreign country; they do things differently there.', 0, '2020-06-29 13:37:01', '2020-07-15 07:00:00'),
(30, 'Japan', 1, 'japan', 'Richard Kadrey, Kill the Dead', 'c7a8383458a49e26f1902bd21f82f0d1.jpg', 'dd72939ea6932b1cd4326aa2863263c8.gif', 'Memories are bullets. Some whiz by and only spook you. Others tear you open and leave you in pieces.', 0, '2020-06-29 13:41:07', '2020-07-16 07:00:00'),
(31, 'Jordan', 1, 'jordan', 'Rachel Vincent, My Soul to Save', '7f0f5cddb645384a49af499b10c11f04.jpg', 'ad1b22d230cc9ea6250eb6f1853e1939.gif', 'The worst memories stick with us, while the nice ones always seem to slip through our fingers.', 0, '2020-06-29 13:43:28', '2020-07-10 07:00:00'),
(32, 'Kenya', 1, 'kenya', 'Lisa Wingate, A Month of Summer', '865ad5c286d51bde27bc3fd57dd9b4bf.jpg', '96c7c3066d280fc84da5933e8acb164e.gif', 'The hardest thing about the road not taken is that you never know where it might have led.', 0, '2020-06-29 13:45:44', '2020-07-16 07:00:00'),
(33, 'Martinique', 2, 'martinique', 'unknown', 'dcba5e38dd1ce4c9ccfb024aca91fb09.jpg', 'ba01e4353de89146e818c21711257082.png', 'If my parting has left a void, Then fill it with remembered joy. A friendship shared, a laugh, a kiss, Ah yes, these things I too will miss.', 0, '2020-06-29 13:48:39', '2020-07-16 07:00:00'),
(34, 'Mexico', 1, 'mexico', 'unknown', 'cec49db4a2610d0397a332dcfd4f7ed6.jpg', 'dbd93ee4fee4439d94f7e6a8da0229b3.png', 'Be not burdened with times of sorrow, I wish you the sunshine of tomorrow. My Life\'s been full, I savoured much, Good friends, good times, a loved one\'s touch,', 0, '2020-06-29 13:50:59', '2020-07-16 07:00:00'),
(35, 'Montserrat', 2, 'montserrat', 'unknown', '22e1767443ddb629c31bbf8f9c75cd12.png', '4358a295db9b20fdc05dc1e3c6eac07a.jpg', 'Perhaps my time seemed all too brief, Don\'t lengthen it now with undue grief. Lift up your heart and share with me, God wanted me now, He set me free.', 0, '2020-06-29 13:52:41', '2020-07-17 07:00:00'),
(36, 'Morocco', 1, 'morocco', 'Linda Fifer Ralphs', 'd5711bd4a1cf7d364cefa448fb014067.png', 'accfb3b072df2f3d2f47fcc9165416b7.gif', 'Memories are like a garden. Regularly tend the pleasant blossoms and remove the invasive weeds.', 0, '2020-06-29 13:54:25', '2020-07-17 07:00:00'),
(37, 'Mozambique', 1, 'mozambique', 'Corrie ten Boom', '62dd576c3be56b673b03d6ad2e633139.jpg', 'dff6159bb6c697e8fcb077c5263a96d9.gif', 'Memories are the key not to the past, but to the future.', 0, '2020-06-29 13:56:13', '2020-07-16 07:00:00'),
(38, 'Namibia', 1, 'namibia', 'Ben Affleck', 'ee35b88f1de4c495a035f164cad3b560.png', 'c06c0e5ed1c7728ede2f6c3812707b33.gif', 'Memories, all those little experiences make up the fabric of our lives and on balance, I wouldn\'t want to erase any of them, tempting though it may be.', 0, '2020-06-29 13:58:04', '2020-07-17 07:00:00'),
(39, 'Netherlands', 2, 'netherlands', 'Thomas Fuller', '4a8d8f3b7f9d9ad2459b60788e2dca1e.jpg', 'fdd4e76fbdb5c2052239b56c90d36be1.gif', 'Leftovers in their less visible form are called memories. Stored in the refrigerator of the mind and the cupboard of the heart.', 0, '2020-06-29 13:59:53', '2020-07-16 07:00:00'),
(40, 'Netherlands Antilles', 2, 'netherlands_antilles', 'unknown', '571c28a1364471b4988812bdb715aa5f.jpg', 'f0955ad094fefd033d8fe3fae19b6e37.png', 'We little knew that day, God was going to call your name. In life we loved you dearly, In death, we do the same.', 0, '2020-06-29 14:02:04', '2020-07-16 07:00:00'),
(41, 'Nicaragua', 1, 'nicaragua', 'Mark Lawrence', '4760c619932d6234cfe81cf553f4586b.png', '9bbbc8ce035237836ea5519b1dd7dfcc.gif', 'Memories are dangerous things. You turn them over and over, until you know every touch and corner, but still you\'ll find an edge to cut you.', 0, '2020-06-29 14:04:06', '2020-07-17 07:00:00'),
(42, 'Nigeria', 1, 'nigeria', 'From a Headstone in Ireland', '50dc7488d3b2139721190e393f673ae6.png', 'ccd8bc9c15f5a8854152c4dc6c411c89.gif', 'Death leaves a heartache no one can heal, love leaves a memory no one can steal.', 0, '2020-06-29 14:05:38', '2020-07-16 07:00:00'),
(43, 'Pakistan', 1, 'pakistan', 'Ugo Eze', '2f00f98ce38cc4c79772955c192228d3.jpg', '99836485bfd3d2577391e81905309148.gif', 'Be careful who you make memories with. Those things can last a lifetime.', 0, '2020-06-29 14:07:26', '2020-07-16 07:00:00'),
(44, 'Panama', 1, 'panama', 'Catherine Pulsifer', '4a89ad57e854dc9d05e6c9de62ca3161.png', '9ba4b3ee10fc71ebac2e69f177e10929.gif', 'Memories, the one thing that can never be taken away from us. Make lots of them!', 0, '2020-06-29 14:09:37', '2020-07-17 07:00:00'),
(45, 'Puerto Rico', 2, 'puerto_rico', 'unknown', '3462b4ae9f7cca7927e4d713e13f9319.jpg', '17463168bf288f1075e0643be9e4ec7f.jpg', 'It broke our hearts to lose you. You did not go alone. For part of us went with you, The day God called you home.', 0, '2020-06-29 14:11:26', '2020-07-16 07:00:00'),
(46, 'Somalia', 1, 'somalia', 'Alyice Edrich', 'b948e6f922f8b9ad4ec19f6506c3bca5.jpg', '6958e51c63457841fa208209e0ec9f53.gif', 'Creating memories is a priceless gift. Memories will last a lifetime; things only a short-period of time.', 0, '2020-06-29 14:13:38', '2020-07-16 07:00:00'),
(47, 'South Africa', 1, 'south_africa', 'Becky Aligada', '6f1638dce44b8b8495d51b968a202577.png', '3ca7e136d5744c7279ee1f13fde7cd8c.gif', 'Memories are the treasures that we keep locked deep within the storehouse of our souls, to keep our hearts warm when we are lonely.', 0, '2020-06-29 14:15:33', '2020-07-17 07:00:00'),
(48, 'Spain', 1, 'spain', 'Saul Bellow', '444188a7a07002ae04fff7408d20e2f9.jpg', '00cdb1b53a3e659017019c0034d65014.gif', 'Everybody needs his memories. They keep the wolf of insignificance from the door.', 0, '2020-06-29 14:17:59', '2020-07-15 07:00:00'),
(49, 'Sri Lanka', 1, 'sri_lanka', 'Haruki Murakami', '135cbf8e919588ea0dc65b076823dd51.jpg', '78d54ea9d0dd6551b6421ed0cea04215.gif', 'Memories are what warm you up from the inside. But they\'re also what tear you apart.', 0, '2020-06-29 14:19:23', '2020-07-16 07:00:00'),
(50, 'St Barthelemy', 2, 'st_barthelemy', 'unknown', 'd0eaaff0fe4762dcfa5599831883fe9c.jpg', 'f1a4785039fd9b5aa4f69271fbacd251.png', 'You left us beautiful memories, Your love is still our guide. And although we cannot see you, You are always at our side.', 0, '2020-06-29 14:20:46', '2020-07-17 07:00:00'),
(51, 'St Kitts and Nevis', 2, 'st_kitts_and_nevis', 'Ron Tranmer', '7dceedda7ba16449d80514641ddb4d91.jpg', 'bc91da262bcd68d155824df45d8f82e4.png', 'Our family chain is broken, And nothing seems the same, But as God calls us one by one, The chain will link again.', 0, '2020-06-29 14:22:50', '2020-07-17 07:00:00'),
(52, 'St Lucia', 2, 'st_lucia', 'Ralph Waldo Emerson', 'eb900d1e767645b6b1dddca1425741cd.jpg', '6f801ffbd153a4c533118371a342067f.png', 'It is the secret of the world that all things subsist and do not die, but retire a little from sight and afterwards return again.', 0, '2020-06-29 14:24:16', '2020-07-17 07:00:00'),
(53, 'St Vincent and the Grenadines', 2, 'st_vincent_and_the_grenadines', '? Carson McCullers', '4d64d3f9f2294f53157be5f594d68e4c.jpg', 'f26d3408d0f86fc7caee810e1150b83d.png', 'How can the dead be truly dead when they still live in the souls of those who are left behind?', 0, '2020-06-30 04:46:41', '2020-07-17 07:00:00'),
(54, 'Sweden', 1, 'sweden', '-David Gerrold', '2f1022ca53cd4ee8046cdc7c155114b8.png', '2d491b684c4da79b422a01ab859c7159.gif', 'I have memories - but only a fool stores his past in the future.', 0, '2020-06-30 05:24:12', '2020-07-17 07:00:00'),
(55, 'Switzerland', 1, 'switzerland', '-David Richard', '55132b01eaf3af03afcef43e360dc04c.jpg', 'cf3153fd055544baefae46a727f5c5fa.gif', 'The beautiful thing about memories is that they are yours; whether they are good, bad, or indifferent. They belong to you, and no matter where you are now.', 0, '2020-06-30 05:26:05', '2020-07-16 07:00:00'),
(56, 'Tanzania', 1, 'tanzania', '-Kevin Spacey', 'e008d63689a515fa624bbdbf7eb145fb.jpg', 'ce67bffe06469a7f3e576ad17ac94544.gif', 'Memories are like moonbeams, we do with them what we will.', 0, '2020-06-30 05:27:34', '2020-07-10 07:00:00'),
(57, 'Trinidad and Tobago', 2, 'trinidad_and_tobago', '? J.K. Rowling', 'd9b7b08222b181de42a5a843be2baff9.png', 'fe3cf4717742784c1b8a7408d13c2155.png', 'To the well-organized mind, death is but the next great adventure.', 0, '2020-06-30 05:29:49', '2020-07-17 07:00:00'),
(58, 'Turks and Caicos Islands', 2, 'turks_and_caicos_islands', 'Henry Wadsworth Longfellow', 'e3339d46148a8ddb8472a2101abf4ad8.jpg', 'b4f16457c1b9a35bee617fdd6a2df5e2.png', 'When a great man dies, for years the light he leaves behind him, lies on the paths of men.', 0, '2020-06-30 05:34:55', '2020-07-17 07:00:00'),
(59, 'Uganda', 1, 'uganda', '-Hugh Jackman', '69dacdaaa63c981af72c40b7c8e9c4d9.jpg', '588e60212e5ccd30f834c554eadf4b82.gif', 'To have memories of those you have loved and lost is perhaps harder than to have no memories.', 0, '2020-06-30 05:37:17', '2020-07-15 07:00:00'),
(60, 'United Kingdom', 1, 'united_kingdom_uk', '-Harry Connick Jr.', '66ea1578d690bbc7cd5ddf85672e6873.jpg', '4d4ab5f11a1460cbb298ec7fb6960252.gif', 'In my life I find that memories of the spirit linger and sweeten long after memories of the brain have faded.', 0, '2020-06-30 05:40:52', '2020-07-15 07:00:00'),
(61, 'United States of America (USA)', 1, 'united_states_of_america_usa', '-MOHINDER SURESH', 'a32583acb36f46ea9dfc9ed08fcc6b20.png', 'aa3914c113e60efebec9e2a8f2a29e04.gif', 'Our memories give us voice and bear witness to history, so that others might learn. So they might celebrate our triumphs and be warned of our failures.', 0, '2020-06-30 05:56:36', '2020-07-17 07:00:00'),
(62, 'United States Virgin Islands', 1, 'united_states_virgin_islands', 'Socrates (BC 469-BC 399)', 'f781a9adcb08f5ecc9938b1a6bea2d15.jpeg', '813d3cff9eea8a1110ea3017ed995f31.png', 'The hour of departure has arrived and we go our ways; I to die, and you to live. Which is better? Only God knows.', 0, '2020-06-30 05:58:18', '2020-07-15 07:00:00'),
(63, 'Zambia', 1, 'zambia', '-Leonard Shelby', 'a24cb5f894b5723792b68727b107b2a5.jpg', '4e172791b6140672a3a71bb84612263f.gif', 'If we can\'t make memories, we can\'t heal.', 0, '2020-06-30 05:59:51', '2020-07-15 07:00:00'),
(64, 'Zimbabwe', 1, 'zimbabwe', 'Byron Pulsifer', '4b2789ced8ddeb738424f5ada6b3cccc.jpg', 'ddb63768cdf2dcbb33061d74311aca86.gif', 'The finest memories are those where we have helped someone without expecting anything in return.', 0, '2020-06-30 06:01:30', '2020-07-15 07:00:00'),
(65, 'St Martin (France)/St Marten (Netherlands)', 2, 'st_martin_france_st_marten_netherlands', '- Philip Pullman', '2842d632c815dbb25192b0ce91ebe8d4.jpg', 'f1382cf83a09a0d8bc77016cfdce7804.png', 'You\'ll drift apart, it\'s true, but you\'ll be out in the open, part of everything alive again.', 0, '2020-06-30 06:06:17', '2020-07-16 07:00:00'),
(66, 'Honduras', 2, 'honduras', 'unknown', '374e35a3009f301639dcd2b374dd8d78.jpg', '05b803474812036a1aba657a217d9d42.png', 'Don\'t grieve for me, for now I\'m free, I\'m following the path God laid for me. I took his hand when I heard his call, I turned my back and left it all.', 0, '2020-06-30 06:08:40', '2020-07-16 07:00:00'),
(67, 'Jamaica', 2, 'jamaica', 'unknown', 'a6d2b5af2fa6b8f94ec73737651a6414.jpg', '47e5cd0e666322e30ddf3a3ca7fae3c8.png', 'I could not stay another day, To laugh, to love, to work, to play. Tasks left undone must stay that way, I\'ve found that peace at the close of the day.', 0, '2020-06-30 06:10:13', '2020-07-16 07:00:00'),
(68, 'Anguilla', 2, 'anguilla', '-From a Headstone in Ireland', '201dca4cc24803c95dff8ff801875b62.jpg', 'c839ffc189a8d76906fa968b30242a84.jpg', 'Death leaves a heartache no one can heal, love leaves a memory no one can steal.', 0, '2020-06-30 06:13:07', '2020-07-16 07:00:00'),
(69, 'Aruba', 2, 'aruba', '- Kahlil Gibran', 'ec238e276d071c497b5df1900a34b978.png', '5683631fb9577ae7e2666d6b4851de93.png', 'Oh heart, if one should say to you that the soul perishes like the body, answer that the flower withers, but the seed remains.', 0, '2020-06-30 06:14:51', '2020-07-20 07:00:00'),
(70, 'Bermuda', 2, 'bermuda', 'Socrates (BC 469-BC 399)', '9757857a26b542bd62940d7c9bb5ab98.jpg', '8ddd27a3b4243bb0ac574137fdb3eb62.gif', 'The hour of departure has arrived and we go our ways; I to die, and you to live. Which is better? Only God knows.', 0, '2020-06-30 06:17:01', '2020-07-16 07:00:00'),
(71, 'British Virgin Islands', 2, 'british_virgin_islands', '- Psalm 46:1', '9acc647d9f3815883510febec3659b0e.jpg', '47dc611a3bf4b54af2ef3bb2ac344a1e.png', 'God is our refuge and strength, an ever present help in trouble.', 0, '2020-06-30 06:19:08', '2020-07-16 07:00:00'),
(72, 'Cayman Islands', 2, 'cayman_islands', '- Philippians 4:7', 'df8c5c31a652d9434ad4eaf6555ca9e3.jpg', '97422d7c37a60326ffc978f6ccd24222.png', 'And the peace of God, which transcends all understanding, will guard your hearts and your minds, in Christ Jesus.', 0, '2020-06-30 06:21:25', '2020-07-16 07:00:00'),
(73, 'Curacao', 2, 'curacao', '- Kahlil Gibran', '6cb33695ddf5d88b8ebeee4afb4e2dfb.png', 'd3a804356303e499390fc2ca1acbc086.jpg', 'Come close and bid me farewell; touch my eyes with smiling lips.  Let the children grasp my hands with soft and rosy fingers;  Let the ages place their veined hands upon my head and bless me;  Let the virgins come close and see the shadow of God in my eye', 0, '2020-06-30 06:23:57', '2020-07-16 07:00:00'),
(74, 'Guadeloupe', 2, 'guadeloupe', 'unknown', 'd255afcd6f3fa9d765d497292b56bab8.jpg', '40e99316f0250eb18f10f6f680092bdd.png', 'The moment that you died, my heart was torn in two, One side filled with heartache the other died with you. often lie awake at night, when all the world’s asleep and take a walk down memory lane, with memories that I keep. Remembering you is easy, I do it', 0, '2020-06-30 06:26:21', '2020-07-16 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `listing_name` varchar(255) DEFAULT NULL,
  `birth_year` varchar(255) NOT NULL,
  `death_year` varchar(255) NOT NULL,
  `listing_image` text,
  `listing_about` text,
  `country_id` int(11) DEFAULT NULL,
  `listing_category` varchar(255) DEFAULT NULL,
  `celeb` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`id`, `user_id`, `listing_name`, `birth_year`, `death_year`, `listing_image`, `listing_about`, `country_id`, `listing_category`, `celeb`, `created_at`, `updated_at`) VALUES
(1, 10, 'Lavern Brown-Turner', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0a49f90524d5087fb456f1f0bac0e251.jpg', '<p><strong><span style=\"font-size:18px\">Tribute to my sister Lavern Brown-Turner</span></strong><br />\r\nThe flower as beautiful as it is<br />\r\nIs not exempt from the winds or storm<br />\r\nIt stands still<br />\r\nBracing for what is to come<br />\r\nIts surv </p>', 67, 'memory', 0, '2020-06-02 05:57:01', '0000-00-00 00:00:00'),
(2, 4, 'Donald and Winnifred Hall', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ced79b42ddc438ec0f0f5a6d45cd7654.jpg', '<p><strong>Donald Lloyd</strong> Hall and Winnifred Cyrus Hall are parents of Wayne Larson Hall. Wayne is the first child of their marriage. Both had children from previous relationships. They were married for 45 years. They had two other children in the  </p>', 67, 'obituaries', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 7, 'Bob Marley', '1945-02-06', '1981-05-11', '9fb9be41b29ecb74e60a42c96e214eed.png', '<p>Artistic creation is always a project of social construction and transformation that moves beyond citation and hybridity. The artistic personality must have historical awareness, yet cannot be trapped in history,&quot; speaks volumes to our Beloved Bob. Gone too soon, yet ever present, ever sure. https://kotchmagazine.com/searching-for-bob-marley-marlene-daley/ </p>', 33, 'memory', 1, '2020-07-18 01:59:17', '0000-00-00 00:00:00'),
(4, 7, 'Aretha Franklin', '1942-25-03', '2018-08-16', 'd44e6cb8e76b9d53c364c3eee8f31ac5.png', '<p>It&rsquo;s never easy to pen any elocution of one as massive in spirit, presence, performance and delivery as Aretha Franklin, the first woman to have been inducted in the Rock and Roll Hall of Fame. Long live Aretha. https://kotchmagazine.com/queen-of </p>', 33, 'memory', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 7, 'Michael Jackson', '1958-08-29', '2009-06-25', 'aa2f1fa3b52c84ed3c3c1e6db85630fe.png', '<p>The undisputed King of Pop and the giant of his craft whose name will resound for  centuries to come, made time stand still on the news of his passing. He will surely live on forever in the hearts and mind of those who love him. Purpose and Mission accomplished. SIP.</p>', 33, 'memory', 1, '2020-08-01 02:03:31', '0000-00-00 00:00:00'),
(6, 10, 'Inez Grey', '07/21/2020', '07/21/2020', 'c6a63b8ce53aeb4cb03bd471824ffc65.jpg', '<p>Inez Gray, mother, grandmother and great grandmother. She was the root of all these generations.</p>', 67, 'memory', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 9, 'HIM Haile Selassie', '1930', '1974', '69121640a82a8618dc7da4344b558095.jpg', '<p>Throughout history, it has been the inaction of those who could have acted; the indifference of those who should have known better; the silence of the voice of justice when it mattered most; that has made it possible for evil to triumph</p>', 33, 'memory', 1, '2020-07-28 23:35:03', '0000-00-00 00:00:00'),
(46, 32, 'obituries', '2012-12-20', '2020-12-30', '97a605f9a28c9d48835cfa65ad33bb93.jpg', '<p>obituries testing</p>', 68, 'obituaries', 0, '2020-07-29 12:55:53', '2020-07-29 05:55:53'),
(47, 33, 'obituries12', '2020-03-20', '2020-12-20', '1460302a3e0c6358abb69f9fbb820807.jpg', '<p>obituries12</p>', 68, 'obituaries', 0, '2020-07-29 13:13:41', '2020-07-29 06:13:41'),
(48, 33, 'obituries12', '2020-03-20', '2020-12-20', '96b0ac3cd827220304754de2923cd9ea.jpg', '<p>obituries12</p>', 68, 'obituaries', 0, '2020-07-29 13:15:13', '2020-07-29 06:15:13'),
(49, 33, 'obituries12', '2020-03-20', '2020-12-20', '355607b7b1042d5620884fbf6b41f4a5.jpg', '<p>obituries12</p>', 68, 'obituaries', 0, '2020-07-29 13:15:39', '2020-07-29 06:15:39'),
(50, 33, 'obituries123', '2019-12-20', '2020-12-20', '6f763b13e43a5cd6410a40dc9e554db9.jpg', '<p>obituries123</p>', 68, 'obituaries', 0, '2020-07-29 13:41:33', '2020-07-29 06:41:33'),
(51, 33, 'obituries memory', '2018-12-10', '2019-12-30', '11a2802761134b065e8b975bd1de97e9.jpg', '<p>obituries</p>', 68, 'memory', 0, '2020-07-29 13:43:54', '2020-07-29 06:43:54'),
(52, 34, 'new12', '2020-02-10', '2020-12-30', '9ad4e5e7f14ae4074ccc6d1ceafeecb1.jpg', '<p>new12</p>', 69, 'obituaries', 0, '2020-07-29 13:49:37', '2020-07-29 06:49:37'),
(53, 9, 'xyz', '2012-12-20', '2020-12-20', 'd4b483209cb7f1a927d28e789fc80ebf.jpg', '<p>hfwehfjfkfef</p>', 3, 'obituaries', 0, '2020-07-29 13:52:20', '2020-07-29 06:52:20'),
(54, 35, 'aaaabbbccc', '2020-12-12', '2020-12-20', '715555921aebdeb0aa6cb519f2915468.png', '<p>aaaabbbccc</p>', 69, 'obituaries', 0, '2020-07-29 14:08:51', '2020-07-29 07:08:51'),
(55, 35, 'aaaabbbc', '2020-12-20', '2020-12-29', '83718b02a2a9eb652e9b4d11c120fe4c.png', '<p>aaaabbbccc</p>', 69, 'obituaries', 0, '2020-07-29 14:11:32', '2020-07-29 07:11:32'),
(56, 35, 'aaaabbbc', '2020-12-20', '2020-12-29', '0c787636417f521775ee93731b72f999.png', '<p>aaaabbbccc</p>', 69, 'obituaries', 0, '2020-07-29 14:19:00', '2020-07-29 07:19:00'),
(57, 35, 'aaaabbbc', '2020-12-20', '2020-12-29', '6e2038a0f7c9dc69de628c25f86446ac.png', '<p>aaaabbbccc</p>', 69, 'obituaries', 0, '2020-07-29 14:21:08', '2020-07-29 07:21:08'),
(58, 35, 'aaaabbbc', '2020-12-20', '2020-12-29', '2f3a549967ff1e76923815ff0fc1a6ab.png', '<p>aaaabbbccc</p>', 69, 'obituaries', 0, '2020-07-29 14:23:20', '2020-07-29 07:23:20'),
(59, 9, 'abc', '2020-12-20', '2020-12-20', 'ac9c7c93aae8c68be56e9b3d45d07bf9.jpg', '<p>ffdfffsfsf</p>', 69, 'obituaries', 0, '2020-07-29 14:27:02', '2020-07-29 07:27:02'),
(60, 6, 'ali ali', '2020-12-20', '2020-12-20', 'bb474fba867410a31f7b6c82223e8647.jpg', '<p>ali ali</p>', 69, 'obituaries', 0, '2020-07-29 14:32:30', '2020-07-29 07:32:30'),
(62, 4, 'asas', '2020-12-20', '2020-12-30', 'd17745b0631a88a0e16c062892cb6c35.jpg', '<p>sdfsdfsdfs</p>', 67, 'obituaries', 0, '2020-07-29 14:39:23', '2020-07-29 07:39:23'),
(63, 4, 'hhj', '2020-12-12', '2020-12-30', 'cfd6b66d2e8c42cabb32f66981f7a228.png', '<p>werwer</p>', 67, 'obituaries', 0, '2020-07-29 14:41:26', '2020-07-29 07:41:26'),
(64, 4, 'qwqw', '2020-12-20', '2020-12-30', '0fa2c1b7868962f92002645fa20aa407.png', '<p>dsdsfs</p>', 5, 'obituaries', 0, '2020-07-29 14:47:53', '2020-07-29 07:47:53'),
(65, 4, 'gdgd', '2020-12-30', '2020-12-30', 'c8d07033b75116f0a0a18dbab6fc522c.png', '<p>ereef</p>', 5, 'obituaries', 0, '2020-07-29 14:55:21', '2020-07-29 07:55:21'),
(66, 36, 'sdsd', '2020-12-20', '2020-12-30', '48a1615f5a52356b8d16728ec0d789ce.png', '<p>dwedqwe</p>', 70, 'obituaries', 0, '2020-07-29 15:08:01', '2020-07-29 08:08:01'),
(67, 38, 'ali ali', '2020-12-20', '2020-12-30', '51e3fead3b3cdb1a68608518af23bce8.png', '<p>ali ali1212</p>', 68, 'obituaries', 0, '2020-07-29 19:57:37', '2020-07-29 12:57:37'),
(68, 39, 'sssss', '2020-12-20', '2020-12-30', '5ba0b7cb22fe342c8feae305a1d920c2.png', '<p>rgfhfg</p>', 68, 'memory', 0, '2020-07-29 20:03:14', '2020-07-29 13:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT '0',
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `country_id`, `user_name`, `email`, `password`, `full_name`, `address`, `phone`, `profile_photo`, `cover_photo`, `created_at`, `login_status`, `updated_at`) VALUES
(4, 0, 'Jawad', 'jawad@gmail.com', 'arslan12345', 'Arslan Saleem', 'Faisalabad city', '041-768768', '72ffc38c41a475a4306f4938643a2cd2.jpg', '71272c08d9e4ece59f61346889c6f863.jpg', '0000-00-00 00:00:00', 0, '2020-06-06 07:30:06'),
(5, 0, 'kishan', 'kishan@gmail.com', 'kishan12345', 'kishan ahsan', 'Faisalabad', '098-6768798', '2115d53fcdfd95c1cf50554fa0c382f6.gif', '1830ef37067ca07f9574b640a29fb3a5.png', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, 0, 'ali', 'ali@gmail.com', 'ali123', 'ali hassan', 'faisalabad', '03226677876', 'ceb1e9e69797eabee5aa36debffa3297.jpg', '4b32cb2810f7dcbac4c14638ff39d2d7.jpg', '2020-06-29 07:09:29', 0, '0000-00-00 00:00:00'),
(7, 67, 'marlene', 'iamdevelopertoo@gmail.com', '11223344', 'Marlene Daley', 'p196 st#3', '+923326690581', 'ce2a52a3d6aa89f5d17f6d915a0630f9.png', '538ade40218ee73cf4211f2e1d557a44.png', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 67, 'deekaytay', 'deekaytay@gmail.com', 'dt19050', 'DEANDRA S TAYLOR', '810 Longacre Blvd., Yeadon PA 19050', '16104009014', 'cd31c36ee714a0527239a37a6947a616.jpg', 'bda9d666c5008e285f26837c2e2cee1d.jpg', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, 43, 'arslan', 'iamdevelopertoo@gmail.com', '1640000...', 'Arslan Saleem', 'p196 st#3', '+923326690581', '', '', '2020-07-13 15:21:13', 1, '0000-00-00 00:00:00'),
(10, 67, 'daleymarlene@yahoo.com', 'daleymarlene@yahoo.com', 'xixy6)Bd62vdk^QPxFbMoW5h', 'Marlene Daley', 'Atlanta GA', '14044684071', '624ce78da3d5cdd7d5349d27c6af1dc1.jpg', '421c12b23fbfa050cd1a3775c5afd736.jpg', '2020-07-01 16:23:01', 1, '0000-00-00 00:00:00'),
(11, 0, 'MihaiTap', 'mihail.lavrenty@yandex.ru', '8$afX1th9kW', 'MihaiTap', 'http://www.fujiapuerbbs.com/home.php?mod=space&uid=1814669', '83571442875', '', '', '2020-07-25 18:05:25', 0, '0000-00-00 00:00:00'),
(19, 0, 'newuser', 'newuser@gmail.com', 'BelovSones200725080700', 'newuser', '', '', '', '', '2020-07-25 08:08:00', 0, '0000-00-00 00:00:00'),
(29, 0, 'new1', 'new1@gmail.com', '7Ekp', 'new1', '', '', '', '', '2020-07-27 04:58:25', 0, '0000-00-00 00:00:00'),
(31, 0, 'jawad', 'jawadaltaf305@gmail.com', 'MByL', 'jawad', '', '', '', '', '2020-07-27 05:17:04', 0, '0000-00-00 00:00:00'),
(32, 0, 'obituries', 'obituries@gmail.com', 'jSdW', 'obituries', '', '', '', '', '2020-07-29 05:55:53', 0, '0000-00-00 00:00:00'),
(33, 0, 'obituries12', 'obituries@gmail.com', 'ioSf', 'obituries12', '', '', '', '', '2020-07-29 06:13:41', 0, '0000-00-00 00:00:00'),
(34, 0, 'new12', 'new12@gmail.com', 'GAyW', 'new12', '', '', '', '', '2020-07-29 06:49:37', 0, '0000-00-00 00:00:00'),
(35, 0, 'aaaabbbccc', 'aaaabbbccc@gmail.com', 'fazi', 'aaaabbbccc', '', '', '', '', '2020-07-29 07:08:51', 0, '0000-00-00 00:00:00'),
(36, 0, 'sdsd', 'sdsd@gmail.com', 'wUx3', 'sdsd', '', '', '', '', '2020-07-29 08:08:01', 0, '0000-00-00 00:00:00'),
(37, 43, 'jawad ali', 'ali3434@gmail.com', 'qweqwrwrwwer', 'jawad ali', 'faisalabad', '03226677876', '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(38, 68, 'hassan ali', 'hassan1122@gmail.com', 'aTIY', 'hassan ali', '', '', '', '', '2020-07-29 12:57:37', 1, '0000-00-00 00:00:00'),
(39, 68, 'yjykkk', 'ukkukuiu@gmail.com', 's5Ag', 'yjykkk', '', '', '', '', '2020-07-29 13:02:18', 1, '0000-00-00 00:00:00'),
(40, 54, 'Svetasep', 'mamasl3nnikov@yandex.ru', '42ydfzL1o%T', 'Svetasep', 'http://taschencafe.com/', '82261231329', '', '', '2020-07-04 02:10:04', 1, '0000-00-00 00:00:00'),
(41, 8, 'ViklaerKes', 'viki-kalcer@mauler.ru', 'y$8za2Sf5jC', 'ViklaerKes', 'https://xn-----7kcgpnpy3bral5h.xn--p1ai/', '85623143771', '', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(42, 59, 'Ricardophero', 'nikmihalckoff@yandex.ru', 'c#7A82oefyN', 'Ricardophero', 'http://threeandonedesign.com				/', '87939141657', '', '', '2020-08-08 14:59:08', 1, '0000-00-00 00:00:00'),
(43, 38, 'IvanEmoge', 'ivanvasilevvasiliew@yandex.ru', '8jdr1Cz@8gD', 'IvanEmoge', 'http://av-studia.ru/', '85616974956', '', '', '2020-08-12 01:07:12', 1, '0000-00-00 00:00:00'),
(44, 53, 'RuslanCaf', 'r.davidof@yandex.ru', 'ke4$2Kfsv4H', 'RuslanCaf', 'http://pix-art.ru/', '86816532232', '', '', '2020-08-26 21:16:26', 1, '0000-00-00 00:00:00'),
(45, 38, 'Ricardophero', 'nikmihalckoff@yandex.ru', 'c#7A82oefyN', 'Ricardophero', 'http://threeandonedesign.com				/', '84832396347', '', '', '2020-08-03 17:54:03', 0, '0000-00-00 00:00:00'),
(46, 47, 'PrimaxNum', 'primaxx.durov@yandex.ru', '3iys6cL3v$H', 'PrimaxNum', 'http://ostrovskyalexander.ru', '85666272557', '', '', '2020-08-23 00:45:23', 1, '0000-00-00 00:00:00'),
(47, 30, 'Foresttiele', 'foresttromp@yandex.ru', 'vxze447z&LA', 'Foresttiele', 'http://forest-berry.ru', '86196317245', '', '', '2020-08-13 19:15:13', 1, '0000-00-00 00:00:00'),
(48, 34, 'Patricklak', 'e.shtorin@yandex.ru', '3trha32#BeF', 'Patricklak', 'http://entclub.ru/', '82361662127', '', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
