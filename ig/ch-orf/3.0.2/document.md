# Document - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* **Document**

## Document

### FHIR document (Bundle)

This exchange format is defined as a [document type](https://www.hl7.org/fhir/documents.html) that corresponds to a [Bundle](https://www.hl7.org/fhir/bundle.html) as a FHIR resource. A [Bundle](https://www.hl7.org/fhir/bundle.html) has a list of entries. The first entry is the [Composition](https://www.hl7.org/fhir/composition.html), in which all contained entries are then referenced.

**Fig.: CH ORF Document**

![](document.png)

* **Profile**: [CH ORF Document](StructureDefinition-ch-orf-document.md)
* **Example**: Bundle (document) Order-Referral-Form ([XML](Bundle-bundle-order-referral-form.xml.md), [JSON](Bundle-bundle-order-referral-form.json.md))

