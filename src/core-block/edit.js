import { __ } from "@wordpress/i18n";
import "./editor.scss";
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";

export default function Edit() {
	const Local1857NewsBlockBlocks = [
		[
			"core/group",
			{ className: "kcls-news kcls-section" },
			[
				[
					"core/group",
					{ className: "kcls-section-title" },
					[
						[
							"core/heading",
							{ level: 2, content: "Latest News", className: "kcls-heading" },
						],
						[
							"core/button",
							{
								text: "See All News",
								className: "kcls-read-blog-button",
								url: "/news/",
							},
						],
					],
				],
				[
					"kcls/news-core",
					{ content: "This is a placeholder for the Local 1857 News Block." },
				],
			],
		],
	];
	return (
		<div {...useBlockProps()}>
			<InnerBlocks {...useBlockProps()} template={Local1857NewsBlockBlocks} />
		</div>
	);
}
