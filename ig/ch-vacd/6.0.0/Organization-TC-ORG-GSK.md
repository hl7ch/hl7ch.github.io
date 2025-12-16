# Manufacturer GlaxoSmithKline AG - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Manufacturer GlaxoSmithKline AG**

## Organization: Manufacturer GlaxoSmithKline AG

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601001000674

**name**: GlaxoSmithKline AG

**telecom**: ph: tel:+41 31 862 21 11(Work), fax: fax:+41 31 862 22 00(Work), [mailto:swiss.info@gsk.com](mailto:mailto:swiss.info@gsk.com), [https://www.gsk.com](https://www.gsk.com)

**address**: Talstrasse 3-5 Münchenbuchsee BE 3053 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "TC-ORG-GSK",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001000674"
    }
  ],
  "name" : "GlaxoSmithKline AG",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "tel:+41 31 862 21 11",
      "use" : "work"
    },
    {
      "system" : "fax",
      "value" : "fax:+41 31 862 22 00",
      "use" : "work"
    },
    {
      "system" : "email",
      "value" : "mailto:swiss.info@gsk.com",
      "use" : "work"
    },
    {
      "system" : "url",
      "value" : "https://www.gsk.com",
      "use" : "work"
    }
  ],
  "address" : [
    {
      "line" : ["Talstrasse 3-5"],
      "city" : "Münchenbuchsee",
      "state" : "BE",
      "postalCode" : "3053",
      "country" : "CH"
    }
  ]
}

```
