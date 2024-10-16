--
-- Database: `atex`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created`) VALUES
(1, 'Python', 'Python is used for server-side web development, software development, mathematics, and system scripting, and is popular for Rapid Application Development', '2024-09-02 17:06:43'),
(2, 'Javascript', 'JavaScript is a scripting or programming language that allows you to implement complex features on web pages', '2024-09-02 17:07:39'),
(3, 'Django', 'The Django web framework is a free, open source framework that can speed up development of a web application being built in the Python programming language.', '2024-09-02 17:07:52'),
(4, 'Flask', 'Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries.', '2024-09-02 17:08:02'),
(5, 'C++', 'C++ uses objects, which are data fields with unique attributes, instead of logic or functions. ', '2024-09-02 17:08:16'),
(6, 'Android Studio', 'Android Studio is the official integrated development environment (IDE) for Android application development. ', '2024-09-02 17:08:23'),
(7, 'Php', 'PHP (Hypertext Processor) is a general-purpose scripting language and interpreter that is freely available and widely used for web development.', '2024-09-02 17:11:08'),
(8, 'Node Js', 'Node. js (Node) is an Open Source, cross-platform runtime environment for executing JavaScript code.', '2024-09-02 17:11:27'),
(9, 'Java', 'Java is a multiplatform, object-oriented programming language that runs on billions of devices worldwide.', '2024-09-02 17:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `thread_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `comment_content`, `comment_by`, `comment_time`, `thread_id`) VALUES
(1, 'use apt update && apt upgrade \r\nthen pkg install python', 1, '2024-09-02 17:22:42', 1),
(2, 'use apt update && apt upgrade \r\nthen pkg install python', 3, '2024-09-02 17:23:22', 1),
(3, 'sdfjsdkhfjdsf', 4, '2024-09-02 17:25:05', 1),
(4, 'adsopwepyjhbdkjasd', 4, '2024-09-02 17:25:10', 1),
(5, 'fdsiwehewqbwkjfbds', 1, '2024-09-02 17:25:15', 1),
(6, 'fewrfj;fqhwf\r\n', 2, '2024-09-02 17:25:21', 1),
(7, 'adsopwepyjhbdkjasd', 3, '2024-09-02 17:25:27', 1),
(8, 'pkg install python2 ', 1, '2024-09-03 15:53:35', 9),
(9, 'simple restart the pc ', 7, '2024-09-03 16:32:30', 16),
(10, 'simple restart the pc ', 7, '2024-09-03 16:47:20', 16),
(11, '&gt;', 7, '2024-09-04 13:08:02', 1),
(12, '&lt;script>  \r\n  alert("andrul");\r\n&lt;/script>', 7, '2024-09-04 13:10:55', 1),
(13, 'use \r\npkg install python \r\nit will work properly', 8, '2024-09-04 15:14:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `sno` int(11) NOT NULL,
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_description` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`sno`, `thread_id`, `thread_title`, `thread_description`, `thread_cat_id`, `thread_user_id`, `dt`) VALUES
(0, 1, 'python installation ', 'in termux I am unable to install python ', 1, 1, '2024-09-02 17:20:54'),
(0, 2, 'error', 'ffdsfdsfoiuo;rpwe', 1, 4, '2024-09-02 17:25:50'),
(0, 3, 'error', 'ffdsfdsfoiuo;rpwe', 1, 3, '2024-09-02 17:26:49'),
(0, 13, 'asdgf', 'asgsfdg', 1, 0, '2024-09-03 16:10:22'),
(0, 14, 'er6ty647y', '4556345232224ffg', 1, 1, '2024-09-03 16:13:02'),
(0, 15, 'er6ty647y', '4556345232224ffg', 1, 1, '2024-09-03 16:25:21'),
(0, 16, 'Reload error ', 'while reload python got error', 1, 7, '2024-09-03 16:31:48'),
(0, 17, 'java setup', 'unable to setup', 2, 7, '2024-09-03 16:53:40'),
(0, 28, 'hello', '&lt;script> alert("andrul"); &lt;/script>', 1, 7, '2024-09-04 13:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `dt`) VALUES
(7, 'andrul', '$2y$10$TJGqifRUlr.sOaCCeuP1iedqiF1st7J8vMnB/B/7PN1Nco03Rx6oa', '2024-09-03 16:28:35'),
(8, 'vedant', '$2y$10$TJ3c3x.9.KaY58KQ/Fzze.hG/AN491M1Ro6foBdZz02KWORRsCqzm', '2024-09-04 15:13:32'),
(9, 'mit', '$2y$10$igXEoTpUM3V4UBjGxRv//O/I1PRzNNE/AL5gC1sbvNoqUUYrtWMz.', '2024-09-04 17:50:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
