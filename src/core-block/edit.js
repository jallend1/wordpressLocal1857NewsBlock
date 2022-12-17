import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.scss";

export default function Edit() {
	return (
		<p {...useBlockProps()}>
			{__(
				"Local 1857 Recent News Block – hello from the editor!",
				"local1857-news-block"
			)}
		</p>
	);
}
