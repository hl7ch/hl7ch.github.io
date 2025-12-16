# Readable Representation of EPR Documents - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Readable Representation of EPR Documents**

## Readable Representation of EPR Documents

Representation (display) of FHIR Documents (Bundle) in the the context of the Swiss EPR:

1. Exchange formats for the Swiss EPR require a readable representation.
1. For this purpose, the`originalRepresentation`section has been defined in the[CH Core Composition EPR profile](StructureDefinition-ch-core-composition-epr.md), from where a embedded PDF as a Binary resource is linked. According to the EPR ordinance the PDF has to be in PDF/A-1 or PDF/A-2 format.
1. This is one possible way for the readable representation of EPR documents. It is used, for example, in the CH EMED exchange format (Medication Card document, Medication Prescription document).

 In a future version, the approach for including the original representation may change to align with european or universal approaches, such as using the R5 Composition.relatesTo backport extension or other mechanisms as described in [#380](https://github.com/hl7ch/ch-core/issues/380). The current implementation is maintained for backward compatibility with existing systems. 

### Including the PDF in the FHIR Document

To include the PDF in the FHIR document, it is added to the Bundle ([CH Core Document EPR profile](StructureDefinition-ch-core-document-epr.md)) as an entry containing a [Binary resource](https://hl7.org/fhir/R4/binary.html). The section `originalRepresentation` in the Composition ([CH Core Composition EPR profile](StructureDefinition-ch-core-composition-epr.md)) contains narrative text with an HTML element that is linked to the Binary resource through the [textLink extension](https://hl7.org/fhir/extensions/5.3.0-ballot-tc1/StructureDefinition-textLink.html) (5.3.0-ballot-tc1 version), which formally establishes the connection between the HTML element's ID and the referenced Binary resource, following [IPS best practices for linking narrative content to structured data](https://hl7.org/fhir/uv/ips/STU2/Design-Conventions.html#linking-narrative-to-discrete-fhir-resources).

### Example

The below example snippets show the relevant parts of the EPR document example [Transfer note for radiological diagnostics](Bundle-DocumentContainingOriginalRepresentationAsPdfA.json.md):

Section `originalRepresentation` of the Composition entry:

 

Binary entry:

 

