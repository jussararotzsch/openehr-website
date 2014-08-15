<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Fundação';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Legal Status</h2>
			<p> A fundação openEHR é, no momento, uma sociedade limitada sem fins lucrativos. Seus fundadores foram a University College London, do Reino Unido e a empresa australiana Ocean Informatics. Ela está sob regulação das leis de companhias de 1985 e 1989 do Reino Unido. O nome openEHR é marca registrada internacional da Fundação.</p>
			<p> Como parte do novo modelo de governança, a Fundação será recriada como uma nova organização sem fins lucrativos, possivelmente na forma de uma Empresa Social ou uma sociedade limitada sem fins lucrativos (o mesmo tipo de organização atual),,forma comumente utilizada para sociedades sem fins lucrativos no Reino Unido. A nova organização será criada através de consulta à diretoria interina e potencials membros futuros da organização.</p>
			
			
			<h2> Visão  da FundaçãoopenEHR</h2>
			<p>A visão da Fundação openEHR é de um mundo onde o sistema de saúde se beneficia rotineiramente das Tecnologias de Informação e Comunicação e em particular de :</p>
			<ul>
				<li> registros eletrônicos longituninais eletrônicos (RESs);</li>
				<li>computação dos dados dos RESs para melhorar a qualidade da atenção e da pesquisa em saúde./li>
			</ul>
			
			
			<h2>Missão openEHR</h2>
			<p>A Fundação atua em cima de três princípios basilares: rigor, engajamento e confiança. Esses princípios correspondem ás atividade chave da Fundação, organizadas dentro de seus quatro Programas:</p>
			<ul>
				<li><a href="/pt/programas/especificações/">Programa de Especificações</a>:
					<ul>
						<li>desenvolvimento de especificações abertas rigorosas, validadas pela implantação;</li>
						<li>participação no desenvolvimento de padrões internacionais;</li>
					</ul>
				</li>
				<li><a href="/pt/programas/modelosclinicos/"> Programa de Modelos Clínicos</a>: 
					<ul>
						<li>desenvolvimento de modelos clínicos (arquétipos e templates), interfaces de terminologia;</li>
						<li>engajamento de projetos de implantação de sistemas de informação clínicos;</li>
					</ul>
				</li>
				<li><a href="/pt/programas/software/"> Programa de Aplicações</a>: 
					<ul>
						<li>desenvolvimento de ferramentas e aplicações de código livre;</li>
						<li>participação em connectathons and  testes de implantação</li>
					</ul>
				</li>
				<li><a href="/pt/programas/localização/"> Programa de Localização</a>: 
					<ul>
						<li>advocacy and locale-based education and dissemination;</li>
						<li>working with national standards organisations;</li>
					</ul>
				</li>
			</ul>
			<p>All of openEHR Programs will support health informatics education.</p>
			
			<h3>Developing Trust: patients and citizens at the centre</h3>
			<p>As we develop the specifications and engage clinicians, it is increasingly important to ensure that the platform benefits people using the health service.
			At this point the openEHR architecture ensures:</p>
			<ul>
				<li>that information (rather than just authorisation data) can be kept in personal storage such as a memory key or phone;</li>
				<li>that information can be stored with no identifying information within the EHR;</li>
				<li>that information does not have to be centralised, being stored and/or made available only where it is required;</li>
				<li>accountability of users and providers;</li>
				<li>that the owner of the record can partition the information and control access if required.</li>
			</ul>
			<p>The next phase of uptake and implementation will require careful scrutiny by those using the health service and providers of personal health record services.</p>
			
			<h3>openEHR as a standard</h3>
			<p>The success of openEHR is in no small part due to the formal acceptance of CEN 13606 as a European and ISO standard. This standard is based on many aspects of the openEHR design approach, and part 2 of the standard is a snapshot of the openEHR Archetype specifications. The openEHR Foundation will work closely with CEN, ISO, HL7 and OMG and other standards organisations on EHR-related and clinical modelling standards.</p>
			<p>As terminology is a key-stone component of semantic interoperability, openEHR archetypes explicitly provide various ways to implement terminology bindings. The Foundation will work closely with IHTSDO on all terminology-related matters, as well as with other terminology maintainers.</p>
			
			<h3>Finally...</h3>
			<p>The openEHR Foundation will continue to proceed based on its usual 3 key activities ... implementation, implementation, implementation.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
