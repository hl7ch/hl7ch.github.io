# ALIS 5.1 XML VisitLabServiceAssignment - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS 5.1 XML VisitLabServiceAssignment**

## Example Binary: ALIS 5.1 XML VisitLabServiceAssignment

This content is an example of the [CH ALIS Leistungsschnittstelle - Visit](StructureDefinition-Visit.md) Logical Model and is not a FHIR Resource

```

<?xml version="1.0" encoding="UTF-8"?>
<Visit>
	<VisitNumber>987654</VisitNumber>
	<PatientID>102</PatientID>
	<PatientName>Tester</PatientName>
	<PatientGivenName>Paul</PatientGivenName>
	<PatientBirthDate>1982-03-22</PatientBirthDate>
	<PatientGender>M</PatientGender>
	<Service Transaction="insert">
		<ServiceDate>2025-03-04T09:00:00Z</ServiceDate>
		<SessionID>1</SessionID>
		<OrderID>2025403-2</OrderID>
		<ReferrerID>007</ReferrerID>
		<ServiceType>AL2025</ServiceType>
		<ServiceItem>1368.00</ServiceItem>
		<EnteredDateTime>2025-03-05T10:05:36Z</EnteredDateTime>
		<ProviderID>2700</ProviderID>
		<SectionCode>M990.06</SectionCode>
		<EnteredBy>7653253256988</EnteredBy>
		<ItemNumber>46784</ItemNumber> 
		<Quantity>1</Quantity>
		<ServiceAssignment>
			<OrderingProviderID>7653253258966</OrderingProviderID>
			<OrderSectionCode>M400.04</OrderSectionCode>
			<OrderDate>2025-03-03T10:05:36Z</OrderDate>
			<FollowUpOrder>0</FollowUpOrder>
		</ServiceAssignment>
	</Service>
</Visit>
```



## Resource Binary Content

application/fhir+xml:

```
{snip}
```
