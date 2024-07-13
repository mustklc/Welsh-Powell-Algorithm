<div class="flex flex-grow flex-col max-w-full">
<div class="min-h-[20px] text-message flex flex-col items-start whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 juice:w-full juice:items-end overflow-x-auto gap-2" dir="auto" data-message-author-role="assistant" data-message-id="84edb991-8544-4625-819a-e9a0887a8d68">
<div class="flex w-full flex-col gap-1 juice:empty:hidden juice:first:pt-[3px]">
<div class="markdown prose w-full break-words dark:prose-invert light">

Node Coloring: Welsh Powell Algorithm

The Welsh &amp; Powell (1967) algorithm is developed to find solutions for scheduling or timetable problems. By coloring the nodes in a graph structure, it resolves conflicts and ordering issues. It has many applications in computer and mathematical sciences.

The steps of the algorithm are as follows:
<ol>
 	<li>Find the degree of each node.</li>
 	<li>Sort the nodes in descending order of their degrees.</li>
 	<li>Color the first node in the list (which also has the highest degree) with Color-1.</li>
 	<li>Continue down the list and color all nodes not connected to the colored node(s) with Color-1. Then, remove the colored nodes from the list.</li>
 	<li>Repeat the steps with a new color to color the uncolored nodes. Continue coloring all nodes in degree order until all nodes are colored.</li>
</ol>
The developed application is based on PHP 5 and Javascript. It operates in a web environment. On the homepage, there are two different menus that allow us to create a graph in three different ways. These are: 1) By Entering Navigation and 2) By Entering Page Structure.

&nbsp;
<div class="w-full text-token-text-primary" dir="auto" data-testid="conversation-turn-8" data-scroll-anchor="false">
<div class="py-2 juice:py-[18px] px-3 text-base md:px-4 m-auto md:px-5 lg:px-1 xl:px-5">
<div class="mx-auto flex flex-1 gap-3 text-base juice:gap-4 juice:md:gap-5 juice:lg:gap-6 md:max-w-3xl lg:max-w-[40rem] xl:max-w-[48rem]">
<div class="group/conversation-turn relative flex w-full min-w-0 flex-col">
<div class="flex-col gap-1 md:gap-3">
<div class="flex flex-grow flex-col max-w-full">
<div class="min-h-[20px] text-message flex flex-col items-start whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 juice:w-full juice:items-end overflow-x-auto gap-2" dir="auto" data-message-author-role="user" data-message-id="aaa201ab-f76a-464f-941a-a893f81ec55d">
<div class="flex w-full flex-col gap-1 juice:empty:hidden items-end rtl:items-start">
<div class="relative max-w-[70%] rounded-3xl bg-[#f4f4f4] px-5 py-2.5 dark:bg-token-main-surface-secondary">
<div></div>
<div class="absolute bottom-0 right-full top-0 -mr-3.5 hidden pr-5 pt-1 [.group\/conversation-turn:hover_&amp;]:block"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="w-full text-token-text-primary" dir="auto" data-testid="conversation-turn-9" data-scroll-anchor="true">
<div class="py-2 juice:py-[18px] px-3 text-base md:px-4 m-auto md:px-5 lg:px-1 xl:px-5">
<div class="mx-auto flex flex-1 gap-3 text-base juice:gap-4 juice:md:gap-5 juice:lg:gap-6 md:max-w-3xl lg:max-w-[40rem] xl:max-w-[48rem]">
<div class="flex-shrink-0 flex flex-col relative items-end">
<div>
<div class="pt-0.5 juice:pt-0">
<div class="gizmo-bot-avatar flex h-6 w-6 items-center justify-center overflow-hidden rounded-full juice:h-8 juice:w-8">
<div class="relative p-1 rounded-sm flex items-center justify-center bg-token-main-surface-primary text-token-text-primary h-8 w-8">ChatGPT</div>
</div>
</div>
</div>
</div>
<div class="group/conversation-turn relative flex w-full min-w-0 flex-col agent-turn">
<div class="flex-col gap-1 md:gap-3">
<div class="flex flex-grow flex-col max-w-full">
<div class="min-h-[20px] text-message flex flex-col items-start whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 juice:w-full juice:items-end overflow-x-auto gap-2" dir="auto" data-message-author-role="assistant" data-message-id="22a4dcc4-1944-478e-9c8c-96991e233dc8">
<div class="flex w-full flex-col gap-1 juice:empty:hidden juice:first:pt-[3px]">
<div class="markdown prose w-full break-words dark:prose-invert light">
<ol>
 	<li>Creating a Graph by Entering Navigation: To create a graph by entering navigation, you need to input the pages sequentially as if navigating through a series of connected pages. The same page numbers can be entered multiple times, and the program will remove the duplicates. Below, in Figure 1, is an example of a graph structure. Let's input a traversal through all the nodes in this graph into the application.</li>
</ol>
Figure 1 – Example of a Graph Structure

In the example graph, the connections are given as either unidirectional or bidirectional arrows. Therefore, a traversal made in the following order will visit the entire graph: 1-2-4-2-3-4-2-3-7-3-6-3-5-3-5-10-5-9-5-8-5-8-2 When this traversal sequence is provided to the application, it will first generate the adjacency matrix of the environment to color it using the Welsh Powell algorithm. The adjacency matrix of the example environment is as follows:
<div class="dark bg-gray-950 rounded-md border-[0.5px] border-token-border-medium">
<div align="center">
<figure class="table">
<table border="1" width="349" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td></td>
<td><strong>s1</strong></td>
<td><strong>s2</strong></td>
<td><strong>s3</strong></td>
<td><strong>s4</strong></td>
<td><strong>s5</strong></td>
<td><strong>s6</strong></td>
<td><strong>s7</strong></td>
<td><strong>s8</strong></td>
<td><strong>s9</strong></td>
<td><strong>s10</strong></td>
</tr>
<tr>
<td><strong>s 1</strong></td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 2</strong></td>
<td>1</td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 3</strong></td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 4</strong></td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 5</strong></td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td><strong>s 6</strong></td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 7</strong></td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 8</strong></td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 9</strong></td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 10</strong></td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
</tbody>
</table>
</figure>
</div>
<div class="overflow-y-auto p-4" dir="ltr"><code class="!whitespace-pre hljs language-markdown">
</code></div>
</div>
Table 1 – Adjacency Matrix of the Example Graph Structure

To color the graph according to the algorithm, we first find the degree of each node (page) and then sort the nodes in descending order. The degree of each node is the sum of its in-degrees and out-degrees.

Degrees:
<ul>
 	<li>Degree of page 3 = 10</li>
 	<li>Degree of page 5 = 8</li>
 	<li>Degree of page 2 = 8</li>
 	<li>Degree of page 8 = 4</li>
 	<li>Degree of page 4 = 4</li>
 	<li>Degree of page 9 = 2</li>
 	<li>Degree of page 10 = 2</li>
 	<li>Degree of page 6 = 2</li>
 	<li>Degree of page 1 = 2</li>
 	<li>Degree of page 7 = 2</li>
</ul>
After sorting the nodes by degree in descending order, the node with the highest degree, node 3, is given Color-1. The same color is then sequentially assigned to nodes that are not neighbors of the colored node, starting from the top. These are nodes 8, 9, and 10. The colored nodes are removed from the list, and the algorithm is repeated. In the second iteration, nodes 5, 2, 6, and 7 are given Color-2, starting with node 5. Finally, node 4 is given Color-3, and the algorithm ends. Figure 2 shows the screen image of a graph colored according to the Welsh Powell algorithm in the application.
<ol start="2">
 	<li>Creating a Graph by Entering Page Structure: In the application, it is possible to create a graph according to the page structure of the environment and color it using the Welsh Powell algorithm. When "Create graph by entering page structure" is clicked from the menu, the screen in Figure 2 appears, prompting the user to enter the number of pages (nodes).</li>
</ol>
&nbsp;

For example, let's create and color the graph structure in Figure 3 in the application. In this case, we need to enter 10 as the number of pages. When we enter 10 and click the "Add Page" button, a form will appear as in Figure 3, where we can enter the other nodes connected to each node. After entering the connected nodes for each node in this form and clicking the "Create Graph" button, the adjacency matrix, degrees of the pages, and the colored graph image in Figure 4 will appear sequentially on the screen.

&nbsp;

Adjacency Matrix:
<div class="dark bg-gray-950 rounded-md border-[0.5px] border-token-border-medium">
<div class="flex items-center relative text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md">

&nbsp;
<figure class="table">
<table border="1" width="443" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td></td>
<td><strong>s1</strong></td>
<td><strong>s2</strong></td>
<td><strong>s3</strong></td>
<td><strong>s4</strong></td>
<td><strong>s5</strong></td>
<td><strong>s6</strong></td>
<td><strong>s7</strong></td>
<td><strong>s8</strong></td>
<td><strong>s9</strong></td>
<td><strong>s10</strong></td>
</tr>
<tr>
<td><strong>s 1</strong></td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 2</strong></td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 3</strong></td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td><strong>s 4</strong></td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 5</strong></td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 6</strong></td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 7</strong></td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 8</strong></td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td><strong>s 9</strong></td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
</tr>
<tr>
<td><strong>s 10</strong></td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
</tr>
</tbody>
</table>
</figure>
</div>
</div>
<ul>
 	<li>Degree of page 3 = 8</li>
 	<li>Degree of page 2 = 8</li>
 	<li>Degree of page 7 = 4</li>
 	<li>Degree of page 9 = 4</li>
 	<li>Degree of page 10 = 4</li>
 	<li>Degree of page 1 = 4</li>
 	<li>Degree of page 8 = 2</li>
 	<li>Degree of page 5 = 2</li>
 	<li>Degree of page 4 = 2</li>
 	<li>Degree of page 6 = 2</li>
</ul>
As can be seen, three different colors have been formed, and none of the nodes with the same color are connected to each other.

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
&nbsp;

&nbsp;

&nbsp;
<div class="mt-1 flex gap-3 empty:hidden juice:-ml-3">
<div>
<div>
<div class="flex"></div>
</div>
</div>
</div>
<div class="flex items-center pb-0.5 juice:pb-0">
<div class="[&amp;_svg]:h-full [&amp;_svg]:w-full icon-md h-4 w-4"></div>
<span class="line-clamp-1 text-sm">4o</span></div>

