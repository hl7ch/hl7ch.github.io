# TC Organization 1 - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC Organization 1**

## Organization: TC Organization 1

Profile: [CH Core Organization EPR](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-organization-epr.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601777777718

**name**: Gruppenpraxis Müller

**telecom**: ph: tel:+41.32.234.55.66(Work), [mailto:bereit@gruppenpraxis.ch](mailto:mailto:bereit@gruppenpraxis.ch), [http://www.gruppenpraxis.ch](http://www.gruppenpraxis.ch)

**address**: Grabenstrasse 2 Zürich ZH 8005 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "TC-ORG1",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601777777718"
  }],
  "name" : "Gruppenpraxis Müller",
  "telecom" : [{
    "system" : "phone",
    "value" : "tel:+41.32.234.55.66",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "mailto:bereit@gruppenpraxis.ch",
    "use" : "work"
  },
  {
    "system" : "url",
    "value" : "http://www.gruppenpraxis.ch",
    "use" : "work"
  }],
  "address" : [{
    "line" : ["Grabenstrasse 2"],
    "city" : "Zürich",
    "state" : "ZH",
    "postalCode" : "8005",
    "country" : "CH"
  }]
}

```
