# Narrative Content - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* **Narrative Content**

## Narrative Content

The CH IPS requirements for narrative content are based on the [FHIR Clinical Documents](#fhir-clinical-documents) and [HL7 IPS-UV](#hl7-ips-uv) guidance, which are explained below.

### Recommendations

#### FHIR Clinical Documents

[Human readability and rendering FHIR Clinical Documents](https://hl7.org/fhir/uv/fhir-clinical-document/2024Sep/#human-readability-and-rendering-fhir-clinical-documents): 
 **The Composition resource is special in that it can convey narrative in both`Composition.text`and`Composition.section.text`. This IG recommends that document metadata be conveyed in`Composition.text`whereas attested narrative be conveyed in`Composition.section.text`.**

#### HL7 IPS-UV

[Narrative Content Guidance](https://hl7.org/fhir/uv/ips/STU2/Design-Conventions.html#narrative-content-guidance): 
 **While no constraints are implemented, early implementers have recommended that IPS documents not duplicate the content contained in`Composition.section.text`(which is required) in the`Composition.text`.**

#### Implementers Feedback

 Please consider also the [HL7 IPS-UV STU Note](https://hl7.org/fhir/uv/ips/STU2/Design-Conventions.html#narrative-content-guidance): 

 **While a globally consistent practice has not been identified, IPS encourages implementers to review emerging best practices and guidelines regarding narrative text that are being implemented in participating nations (e.g.,[The Netherlands](https://informatiestandaarden.nictiz.nl/wiki/FHIR:V1.0_FHIR_IG_STU3#Resource.text_or_.22the_narrative.22)) and discussed in the[FHIR Community](https://chat.fhir.org/#narrow/stream/207835-IPS/topic/generation.20of.20narrative).** 

 **Ongoing FHIR implementations will influence future guidance, such as the FHIR Clinical Document Implementation Guide, about the content and display of narrative content, which is required in the IPS Composition. We encourage implementers to monitor this topic and provide feedback through HL7 engagement, issue logging, and community discussion.** 

 Please add your feedback on this topic for CH IPS via the 'Propose a change'-link in the footer of the page. 

 

### Example

The following are snippets for `Composition.text` and `Composition.section.text` from the [UC 1.1: Swiss IPS Document](Bundle-UC1-SwissIpsDocument1.json.md) example:

`Composition.text` containing document metadata:

 

`Composition.section:sectionMedications.text` containing attested narrative:

 

