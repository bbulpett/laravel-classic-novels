<?php
class NovelTableSeeder extends Seeder {
	public function run() {

		// clear the table
		DB::table('novels')->delete();

		$novel1 = Novel::create(array(
			'title'		=> 'Anna Karenina',
			'author' 	=> 'Leo Tolstoy',
			'year'		=> '1878',
			'synopsis'	=> "Anna Karenina has two plots that run side by side throughout the novel: the story of Anna and the story of Levin. Levin's story is an expression of Tolstoy's pastoral nature and a reaffirmation of the novelist's vision of the simple life. The beauty of the seasons and the pragmatic work of harvesting absorb Levin. Levin's relationship to the land and life is contrasted with Anna's enigmatic and destructive passions. Anna's appearance in the novel represents a rift in the tranquil world which allows physical passion and irrationality to prevail.

The book begins with a crisis at home. Anna's brother Stiva has been caught cheating on his wife, Dolly. Anna manages to convince Dolly to forgive him. Quickly, Anna is understood as a generous person, interested only in benevolence. She is married to the high-ranking, upper class Karenin. Their marriage seems stable and united from the start.

Shortly, though, Anna meets and falls in love with the dashing Count Vronsky. She tries hard to escape his stares, to avoid meeting him, but he is persistent and she is smitten. They have an affair that rips at the threads of their social lives when Anna becomes pregnant. She must, obviously, tell Karenin the news. He demands that his social pride and honor be preserved throughout the whole matter, and he and Anna pretend nothing is happening. He fears the ridicule of society far more than the destruction of his own marriage. Yet Anna cannot let go of Vronsky--she continues to see him quite often. Karenin discovers the extent of the affair when he sees Vronsky leaving his house, and helooks into divorce. Anna, meanwhile, runs off with Vronsky.

After having Vronsky's baby, Anna becomes seriously ill. Karenin thinks she is going to die, so he forgives her for everything she did. Anna swears that is all she wants out of her remaining life. Yet Anna recovers and forgets quickly about Karenin, once again taking up her torrid affair with the count. While Anna was sick and Karenin was present at her side, Vronsky was humiliated by what he had done. He tried to commit suicide by shooting himself, but he, like Anna, did not die. Now he and Anna leave for Italy. Karenin refuses a divorce with Anna, in order that he might deepen her guilt.

Anna's life becomes terrible. Her friends abandon her, ashamed of her behavior. She cannot go out in public with Vronsky, to the theater or the opera, because they would be subjecting themselves to the rumor mill. Vronsky, however, goes out without Anna; he is free to do so. Anna becomes horribly insecure, thinking that Vronsky goes out so much because he is in love with someone else. He is only in love with Anna, however, and the two fight often because of the unspoken tension that exists between them.

Anna is in a tough position. She isn't Vronsky's wife, but she is more than just his mistress. She depends entirely on him for internal peace and love. But what she finally realizes is that no one has the power to satisfy her emotional desires, not Vronsky nor anyone else. She has woven a complex web for herself, one she feels she can only escape by killing herself. This is what she does, jumping in front of a train. She reconsiders briefly before the train hits her, but has no time to dodge.

Running side by side with Anna's story is Levin's, one that mimics the life and interests of the novelist himself. Levin, a landowner and country man, comes to the city to propose to Kitty, a pretty young lady who is mesmerized instead by Vronsky. She rejects Levin's proposal and keeps her eye on the count. Vronsky, however, is smitten with Anna.

Levin is crushed. He goes home to the country and immerses himself totally in his relationship with the land. He writes a book about farming practices in Russia, revealing his belief that landowners should split the land with their peasants so the peasants have an incentive to work harder. This is a controversial plan as Russia becomes more industrialized.

Kitty, too, is crushed by Vronsky's disinterest. She becomes ill, and her family take her to a spa in Germany, where she recovers and realizes that she has truly loved Levin all along. They meet again shortly, and Kitty accepts Levin's second proposal. They marry happily and have a boy named Mitya.

Kitty is a huge force in Levin's life, helping him to come to grips with his lifelong struggle with faith and religion. She also helps Levin cope with the death of his brother Nicholas. In Tolstoy's eyes, the two have the ideal marriage and love.

Though Anna and Levin's plot lines connect at times, Tolstoy dares only the briefest encounter between the two, near the end of the book. Levin is temporarily swept into Anna's world, proving to Tolstoy how dangerous a character like Anna is to Levin's (and his own) world.

As Anna and Levin's stories are contrasted, Tolstoy makes a thematic case, through Levin, for pre-industrial societies as the major source of happiness, wealth and sustenance. He advocates the idea of caring for the land as if it were the wealth of the world, and he labels the land as the only mutual association which can bind societies and families together. Tolstoy shows us the valuable role of rural society in preserving the family. Through Anna, Tolstoy associates city life with vice. That Anna is a creature of the social, urban world makes her character revolve less around virtue, and more around romance, sex, and societal affirmation."
	 	));

		$novel2 = Novel::create(array(
			'title'		=> 'Wuthering Heights',
			'author' 	=> 'Emily Bronte',
			'year'		=> '1847',
			'synopsis'	=> "It is 1801 and Thrushcross Grange has a new tenant, Mr. Lockwood. He visits his landlord, Mr. Heathcliff, who lives at Wuthering Heights, the neighboring property. Mr. Heathcliff is out, and his young relatives, Mrs. Heathcliff and Hareton Earnshaw, are very disagreeable. It starts to snow, but no one is willing to help Mr. Lockwood get home, or to let him stay. He is attacked by a dog while leaving, and in his bloody state, Mr. Heathcliff begrudgingly allows him to stay.

Mr. Lockwood passes his time reading from the journals of a young girl named Catherine. He starts to dream. In the dream he quarrels with a preacher, and the parishioners attack him. A tapping awakens him, and he breaks a window in his attempt to quiet it. He grabs the hand of a ghost child, who calls herself Catherine Linton. Terrified, his scream awakens Heathcliff, who calls for the ghost to reappear. Heathcliff escorts Mr. Lockwood home through the snow-covered moors, but he still catches a bad cold.

Sick for several weeks with this cold, Mr. Lockwood asks Nelly Dean, his serving woman, to tell him about the inhabitants of Wuthering Heights. She was once their housekeeper, and she has lots of stories to tell. Mrs. Heathcliff, who was married to Heathcliff's son, is the daughter of Mrs. Dean's late master, Edgar Linton. Hareton Earnshaw, the nephew of Mrs. Linton, is Mrs. Heathcliff's cousin. Mr. Heathcliff was married to Mr. Linton's sister, who bore Linton, Catherine's husband. Heathcliff was an orphan Mr. Earnshaw found wandering the streets of Liverpool. Hindley, the eldest child, was very jealous of him. When Mr. Earnshaw died two years later, Hindley made Heathcliff work in the fields. Catherine and Heathcliff remained close friends. One day, while spying on Thrushcross Grange, they saw two children, Isabella and Edgar, nearly tearing a puppy to pieces in a selfish rage. One of the Linton's dogs attacked Catherine when they tried to run. She stayed for several weeks to heal, and when she returned from the Lintons, she was well mannered and nicely dressed, which annoyed Heathcliff.

In 1778, Hindley's wife gave birth to Hareton, then died soon after. Hindley, crazed with grief, could not care for him. Despite their differences, Edgar and Catherine grew closer. Catherine agreed to marry Edgar, telling Nelly that Heathcliff was too inferior to marry. Heathcliff heard this, and disappeared without a word.

Catherine became sick, but when her health improved, she and Edgar married and moved to the Grange. The marriage was good until Heathcliff returned. Edgar's sister Isabella fell in love with Heathcliff, but he despised her. Heathcliff kissed Isabella to hurt Catherine, and they had a big fight. During the fight, Edgar came in, demanding Heathcliff leave his house. Disgusted by both of them, Catherine shut herself in her room for three days, becoming ill and mad.

Isabella ran off and married Heathcliff, but she hated her new life at Wuthering Heights. One night, Catherine gave birth to Catherine Linton, and died. Soon after Catherine's death, Isabella escaped to the Grange. She moved to London and had a child, named Linton, and died twelve years later. Hindley died six months after his sister.

Upon Isabella's death, Edgar tried to keep Linton, but Heathcliff sent for him. A few years later, when wandering near the Heights, Cathy met her cousin. But Cathy's father forbids the relationship. She starts a secret correspondence with Linton, and they think they are in love.

Mr. Earnshaw finally agreed the two cousins may visit if they do not go onto the Heights land. Linton coerced Nelly and Cathy to enter the house. Once inside, Heathcliff imprisoned them until Cathy agreed to marry Linton. With her father dying and escape impossible, Cathy relented. After her father died, Heathcliff moved his daughter-in-law to the Heights. Linton died soon after the wedding, and Catherine befriended Hareton, teaching him to read.

The following year, 1802, Mr. Lockwood returns to the Heights. He learns from Nelly that Heathcliff died unexpectedly after a strange and restless madness. He was buried next to Catherine, but several people believe they see he and Catherine wandering the moors. Cathy and Hareton are in love and plan to marry, then move into the Grange."
	 	));

		$novel3 = Novel::create(array(
			'title'		=> 'The Adventures of Huckleberry Finn',
			'author' 	=> 'Mark Twain',
			'year'		=> '1884',
			'synopsis'	=> "The Adventures of Huckleberry Finn, by Mark Twain, is about a young boy, Huck, in search of freedom and adventure. The shores of the Mississippi River provide the backdrop for the entire book.

Huck is kidnapped by Pap, his drunken father. Pap kidnaps Huck because he wants Huck's $6000. Huck was awarded $6000 from the treasure he and Tom Sawyer found in The Adventures of Tom Sawyer. Huck finally escapes from the deserted house in the woods and finds a canoe to shove off down the river. Instead of going back to the widow's house, he decides to run away. He is sick of all of the confinement and civilization that the window enforces upon him. He comes across Jim, Miss Watson's slave, and together, they spend nights and days journeying down the river, both in search of freedom.

While traveling on a raft down the river, Huck and Jim have many adventures and during many long talks, become best of friends. They find a house with a dead man. They end up stealing many things from the house. They find a wrecked ship, and go on it, only to be mixed up with murderers. They get away with money and some other goods. They get separated from each other in the heavy fog, but eventually find each other. A steamboat crashes into their raft and Jim and Huck are separated again. Huck has a run-in with the Grangerfords and the Shepherdsons, two families at war with each other. He is reunited with Jim shortly after this. Then, they meet the King and the Duke, and get into a good deal of trouble performing plays. The King and the Duke pretend to be Peter Wilks' long lost brothers from England and try to steal all of the money left behind in his will. They escape before they are caught. Huck finally gets rid of them, but is left to search for Jim, who gets sold by the King. He ends up at Tom Sawyer's Aunt Sally's house, where Tom and Huck rescue Jim.

Through all of the adventures down the river, Huck learns a variety of life lessons and improves as a person. He develops a conscience and truly feels for humanity. The complexity of his character is enhanced by his ability to relate so easily with nature and the river."
	 	));

		$novel4 = Novel::create(array(
			'title'		=> 'Moby Dick',
			'author' 	=> 'Herman Melville',
			'year'		=> '1851',
			'synopsis'	=> "The story begins with Ishmael heading out to find a whaling vessel to join. On his way to Nantucket, the first American City of whaling, he meets a harpooning savage named Queequeg, and the two become quick friends. They find their ship, the Pequod, and despite ominous warnings, and absence of the captain, they board with the rest.

However, things are not what they seem, because when the head of the boat, Captain Ahab, make his first appearance, there is something troubling about him. Things become even more clearly wrong when Ahab gives voice to his desire: he wishes to hunt down the White Whale, Moby Dick, the whale that took his leg, and kill him. All other desires in him are second to that, and nothing can prevent him from achieving his goal. The majority of his crew is all for the adventure, although one man, the chief mate Starbuck, is worried about its eventual end.

The Pequod sails over foreign seas, in order to reach the equator, a known hangout of Moby Dick, at the right season. They meet various crafts, and some ships have stories to tell of the White Whale; their stories describe only death and destruction; Moby Dick is unable to be killed by human hands, an immortal creature. Moby Dick takes on mythical overtones, as an avenging angel, and even possibly God himself. The ship goes about the regular business of whaling, and in between chapters of the story, Ishmael takes up instructing his reader on the process of killing whales and processing it for oil, the persistence of whales in our culture, and even biology lessons on their physical natures.

Finally they approach their intended destination. With each ship they pass, they come closer and closer to finding Moby Dick, and Ahab is driven further into madness. He creates a weapon out of steel, blessed by harpooner's blood, for the specific purpose of killing the whale, and he ignores the pleas of help from another ship, trying to find it's lost men.

Moby Dick is seen at last. The hunt spans over three days, and after it is done, the entire crew of the Pequod, save one, has been killed. The ship is sunk, the whale-boats destroyed, and Ahab himself is yanked to his death by the very iron he himself forged. Only Ishmael survives, to be picked up by another vessel; only he is left to tell the tale."
	 	));

		$novel5 = Novel::create(array(
			'title'		=> 'The Count of Monte Cristo',
			'author' 	=> 'Alexandre Dumas',
			'year'		=> '1844',
			'synopsis'	=> "Edmond Dantes is the apple of this novel's eye. We will follow him over the course of twenty-three years and 117 chapters (yikes). During this time he will pretend to be a number of different people, including Sinbad the Sailor, Lord Wilmore, Abbe Faria, and the Count of Monte Cristo.

Edmond returns from a long journey at sea. The captain of his ship, the Pharaon, has died along the way, and Edmond has successfully lead the crew and the cargo home to Marseilles, France. The ship's owner, Monsieur Morrel, is extremely happy about this. Edmond gets a promotion. He is super-excited to marry the love of his life, a local lady named Mercedes. Everything seems to be going so well.

Unfortunately, there are two men who are severely jealous of Edmond: Danglars, the ship accountant, resents Edmond for his success and his promotion, and Fernand Mondego, a local fisherman, is in love with Mercedes. Danglars decides that they will frame Edmond for treason, telling authorities that Edmond is in possession of an incriminating letter that will prove that he is a supporter of Napoleon. Napoleon is the French Emperor who has recently been stripped of his power and exiled to the island of Elba. Danglars knows that, on their way back to Marseilles, Edmond carried out the dying wish of their ship's captain: he agreed to deliver a package to a close friend of the captain's, and he was given a letter from the island of Elba to deliver to someone in Paris. Edmond doesn't know what either the package or the letter contains.

When Danglars and Fernand falsely accuse Edmond of treason, the authorities capture Edmond, taking him away from his wedding. Edmond then meets Monsieur Villefort, who is kind of like an assistant district attorney, and Monsieur Villefort takes a look at the so-called incriminating letter from Edmond's former ship captain. Monsieur Villefort's eyes get really big, and the next thing we know Edmond is thrown into the Chateau d'If for life. Chateau d'If is a prison on an island in the Mediterranean Sea. It turns out that the letter was written by someone close to Napoleon and was addressed to Monsieur Villefort's father. And so Monsieur Villefort destroys the letter and has its messenger locked up in order to protect his father.

Edmond spends fourteen years in prison. During that time, he almost goes crazy and nearly gives up on life. But then he meets a wealthy Italian prisoner (a priest) called Abbe Faria. The Abbe educates Edmond about all kinds of things, and the two figure out a way to dig an escape route out of the prison. They have big plans, but, at the last minute, the Abbe becomes very sick and dies. The Abbe leaves Edmond directions to a buried treasure on the island of Monte Cristo.

Edmond escapes Chateau d'If by pretending to be the dead Abbe. He swims to safety on a ship, and he eventually finds his way to the island of Monte Cristo, where he finds riches beyond his wildest dreams. With this newfound treasure, Edmond reinvents himself as the Count of Monte Cristo, traveling all over the world buying beautiful things. He begins to hatch an elaborate plot to take revenge on Danglars, Fernand, and Monsieur Villefort.

Eventually, the Count finds himself in Paris where Danglars, Fernand, and Villefort have all settled. Each of them is very wealthy, successful, and married with children. Fernand has married Mercedes. The Count is an instant hit with these social-climbing families. He's mysterious, sophisticated, wise, and elegant - everyone wants to be his best friend. The Count's intricate revenge plot gains momentum in Paris and around Paris where he gradually ruins the lives of each of his enemies.

The Count gives his home on the island of Monte Cristo and his land in France to Maximillian Morrel (the son of Monsieur Morrel), and Max's sweetheart, Valentine Villefort (Villefort's daughter). The Count leaves the island of Monte Cristo and his revenge-loving life behind, choosing to seek a new existence with his new love, Haydee, a former Greek slave. The Count rides off into the sunset."
	 	));

		$this->command->info('Novels are now seeded. Enjoy!');
	}
}